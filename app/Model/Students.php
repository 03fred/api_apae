<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $birth
 * @property string $mother_name
 * @property string $father_name
 * @property string $address
 * @property string $cellphone
 * @property string $telephone
 * @property string $sus_number
 * @property string $record_number
 * @property boolean $registered
 * @property string $created_at
 * @property string $updated_at
 * @property CidsStudent[] $cidsStudents
 * @property Evaluation[] $evaluations
 * @property Frequency[] $frequencies
 * @property MedicinesStudent[] $medicinesStudents
 * @property StudentsClass[] $studentsClasses
 */
class Students extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'birth',
        'mother_name',
        'father_name',
        'address',
        'cellphone',
        'telephone',
        'sus_number',
        'registered',
        'created_at',
        'updated_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cidsStudents()
    {
        return $this->hasMany('Model\CidsStudent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evaluations()
    {
        return $this->hasMany('Model\Evaluation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function frequencies()
    {
        return $this->hasMany('Model\Frequency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicinesStudents()
    {
        return $this->hasMany('Model\MedicinesStudent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function studentsClasses()
    {
        return $this->hasMany('Model\StudentsClass');
    }
}
