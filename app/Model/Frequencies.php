<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $student_id
 * @property integer $discipline_id
 * @property integer $class_id
 * @property string $date_frequency
 * @property boolean $frequency
 * @property string $created_at
 * @property string $updated_at
 * @property Class $class
 * @property Discipline $discipline
 * @property Student $student
 */
class Frequencies extends Model
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
    protected $fillable = ['student_id', 'discipline_id', 'class_id', 'date_frequency', 'frequency', 'created_at', 'updated_at'];

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
    public function discipline()
    {
        return $this->belongsTo('Model\Discipline');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('Model\Student');
    }
}
