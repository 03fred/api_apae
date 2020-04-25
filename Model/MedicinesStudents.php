<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $medicine_id
 * @property integer $student_id
 * @property string $dosage
 * @property string $medication_hour
 * @property string $created_at
 * @property string $updated_at
 * @property Medicine $medicine
 * @property Student $student
 */
class MedicinesStudents extends Model
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
    protected $fillable = ['medicine_id', 'student_id', 'dosage', 'medication_hour', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicine()
    {
        return $this->belongsTo('App\Medicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
