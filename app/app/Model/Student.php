<?php

namespace App\app\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    protected $fillable = [
        'id',
        'name',
        'birth',
        'name_mother',
        'name_father',
        'address',
        'cellphone',
        'phone',
        'nosso_numero',
        'number_sus',
        'status_registered'
    ];
   
    protected $primaryKey = 'id';
    public $timestamps = false;
}
