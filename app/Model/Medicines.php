<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name_medicine
 * @property string $created_at
 * @property string $updated_at
 * @property MedicinesStudent[] $medicinesStudents
 */
class Medicines extends Model
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
    protected $fillable = ['name_medicine', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicinesStudents()
    {
        return $this->hasMany('Model\MedicinesStudent');
    }
}
