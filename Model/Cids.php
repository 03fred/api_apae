<?php

namespace Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $number
 * @property string $sickness_name
 * @property string $created_at
 * @property string $updated_at
 * @property CidsStudent[] $cidsStudents
 */
class Cids extends Model
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
    protected $fillable = ['number', 'sickness_name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cidsStudents()
    {
        return $this->hasMany('App\CidsStudent');
    }
}
