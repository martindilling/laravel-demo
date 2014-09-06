<?php namespace MDH\Permissions;

use Eloquent;

class Permission extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permissions';

    /**
     * The attributes that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = array('name', 'machinename');


    /**
     * Get the roles associated with this permission
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('MDH\Roles\Role')->withTimestamps();
    }

}
