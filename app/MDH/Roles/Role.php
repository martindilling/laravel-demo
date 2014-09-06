<?php namespace MDH\Roles;

use Eloquent;
use MDH\Permissions\Permission;

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


    /**
     * Get the users associated with this role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('MDH\Users\User')->withTimestamps();
    }

    /**
     * Get the permissions associated with this role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany('MDH\Permissions\Permission')->withTimestamps();
    }


    /**
     * Add a permission to the role
     *
     * @param string $machinename
     */
    public function addPermission($machinename)
    {
        $permission = Permission::whereMachinename($machinename)->first();

        $this->permissions()->attach($permission);
    }
}
