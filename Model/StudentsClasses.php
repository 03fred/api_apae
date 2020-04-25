<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $student_id
 * @property integer $class_id
 * @property string $created_at
 * @property string $updated_at
 * @property Class $class
 * @property Student $student
 */
class StudentsClasses extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['student_id', 'class_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function class()
    {
        return $this->belongsTo('Model\Class');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('Model\Student');
    }
}
