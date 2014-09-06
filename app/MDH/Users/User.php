<?php namespace MDH\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Eloquent;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * The attributes that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = array('firstname', 'lastname', 'email', 'password');


    public function roles()
    {
        return $this->belongsToMany('MDH\Roles\Role')->withTimestamps();
    }
}
