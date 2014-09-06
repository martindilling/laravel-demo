<?php namespace MDH\Roles;

use Eloquent;

class Role extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = array('name', 'machinename');


    public function users()
    {
        return $this->belongsToMany('MDH\Users\User')->withTimestamps();
    }

}
