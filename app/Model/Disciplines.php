<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property Frequency[] $frequencies
 * @property TeachersDiscipline[] $teachersDisciplines
 */
class Disciplines extends Model
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
    protected $fillable = ['name', 'created_at', 'updated_at'];

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
    public function teachersDisciplines()
    {
        return $this->hasMany('Model\TeachersDiscipline');
    }
}
