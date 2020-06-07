<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $student_id
 * @property integer $cid_id
 * @property string $created_at
 * @property string $updated_at
 * @property Cid $cid
 * @property Student $student
 */
class CidsStudents extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['student_id', 'cid_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cid()
    {
        return $this->belongsTo('Model\Cid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo('Model\Student');
    }
}
