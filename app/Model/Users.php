<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $profile_id
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $birth
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $cellphone
 * @property string $telephone
 * @property Profile $profile
 * @property Evaluation[] $evaluations
 * @property TeachersDiscipline[] $teachersDisciplines
 */
class Users extends Model
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
    protected $fillable = ['profile_id', 'name', 'email', 'email_verified_at', 'birth', 'password', 'remember_token', 'created_at', 'updated_at', 'cellphone', 'telephone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        return $this->belongsTo('Model\Profile');
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
    public function teachersDisciplines()
    {
        return $this->hasMany('Model\TeachersDiscipline');
    }
}
