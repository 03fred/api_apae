<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $classroom
 * @property string $name
 * @property string $start
 * @property string $end
 * @property string $period
 * @property string $created_at
 * @property string $updated_at
 * @property Frequency[] $frequencies
 * @property StudentsClass[] $studentsClasses
 */
class Classes extends Model
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
    protected $fillable = ['classroom', 'name', 'start', 'end', 'period', 'created_at', 'updated_at'];

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
    public function studentsClasses()
    {
        return $this->hasMany('Model\StudentsClass');
    }
}
