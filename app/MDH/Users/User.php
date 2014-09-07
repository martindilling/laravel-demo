<?php namespace MDH\Users;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laracasts\Presenter\PresentableTrait;
use Eloquent, DB, Hash;
use MDH\Roles\Role;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait, PresentableTrait;

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


    protected $presenter = 'MDH\Users\UserPresenter';

    /**
     * Get the roles associated with this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('MDH\Roles\Role')->withTimestamps();
    }


    /**
     * Hash password before setting it.
     *
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }


    /**
     * Add a role to the user
     *
     * @param string $machinename
     */
    public function addRole($machinename)
    {
        $role = Role::whereMachinename($machinename)->first();

        $this->roles()->attach($role);
    }

    /**
     * Add more roles to the user
     *
     * @param array $machinenames
     */
    public function addRoles(array $machinenames)
    {
        $roles = Role::whereIn('machinename', $machinenames)->get();

        $this->roles()->sync($roles->lists('id'));
    }
}
