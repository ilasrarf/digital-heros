<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'tel',
        'sexe',
        'date',
        'classe',
        'double_sur_classe',
        'note_de_semester',
        'travail_de_mere',
        'travail_de_pere',
        'user_id',
    ];
    
}
