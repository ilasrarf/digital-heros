<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => ['required'],
            'lastname' => ['required', 'string', 'max:255'],
            'tele' => ['required'],
            'sexe' => ['required'],
            'classe' => ['required'],
            'double_sur_classe' => ['required'],
            'date' => ['required'],
            'travail_de_pere' => [],
            'travail_de_mere' => [],
            'avatar' => [],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = new User();
        $user->name = $data['fullname'].' '.$data['lastname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if($data->hasFile('avatar')){
            $image = $data->file('avatar');
            $imageextension = $image->getClientOriginalExtension();
            $filename = time().'.'.$imageextension;
            Storage::disk('public')->put($filename,  File::get($image));
            $user->avatar = $filename;
        }else{
            $user->avatar = null;
        }
        $user->save();

        Student::create([
            'tele' => $data['tele'],
            'sexe' => $data['sexe'],
            'classe' => $data['classe'],
            'double_sur_classe' => $data['double_sur_classe'],
            'date' => $data['date'],
            'travail_de_pere' => $data['travail_de_pere'],
            'travail_de_mere' => $data['travail_de_mere'],
            'user_id' => $user->id,
        ]);
        return $user;
    }
}
