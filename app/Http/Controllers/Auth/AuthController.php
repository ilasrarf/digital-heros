<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AuthController extends Controller
{
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function register(Request $request)
    {
        // return Validator::make($request, [
        //     'fullname' => ['required'],
        //     'lastname' => ['required', 'string', 'max:255'],
        //     'tele' => ['required'],
        //     'sexe' => ['required'],
        //     'classe' => ['required'],
        //     'double_sur_classe' => ['required'],
        //     'date' => ['required'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
    
        $user = new User();
        $user->name = $request['fullname'].' '.$request['lastname'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        // if($request->hasFile('avatar')){
        //     $image = $request->file('avatar');
        //     $imageextension = $image->getClientOriginalExtension();
        //     $filename = time().'.'.$imageextension;
        //     Storage::disk('public/users')->put($filename,  File::get($image));
        //     $user->avatar = "users/".$filename;
        // }
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar');
            $avatarName = time() . '.' . $avatarPath->getClientOriginalExtension();
       
            $path = $request->file('avatar')->storeAs('users/', $avatarName, 'public');
            $user->avatar = "users/" . $avatarName;
        }
        else{
            $user->avatar = null;
        }
        $user->save();

        Student::create([
            'tel' => $request['tele'],
            'sexe' => $request['sexe'],
            'classe' => $request['classe'],
            'double_sur_classe' => $request['double_sur_classe'],
            'note_de_semester' => $request['note_de_semester'],
            'date' => $request['date'],
            'travail_de_pere' => $request['travail_de_pere'],
            'travail_de_mere' => $request['travail_de_mere'],
            'user_id' => $user->id,
        ]);
        return view('auth.login');
    }
}
