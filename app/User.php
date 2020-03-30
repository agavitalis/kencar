<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(UserRole::class, 'role_user', 'user_id', 'role_id');
    }

    /**
     * @param $roles
     * @return bool
     */
    public function isAuthorizedForRoles($roles) : bool
    {
        if (is_array($roles)) {
            return $this->hasRoleIn($roles);
        }

        return $this->hasRole($roles);
    }

    /**
     * Checks if the give role is assigned to this user.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role) : bool
    {
        return ! is_null($this->roles()->where('title', $role)->first());
    }

    /**
     * Checks if this user has assigned at least one of the given roles.
     *
     * @param array $roles
     * @return bool
     */
    public function hasRoleIn(array $roles) : bool
    {
        return ! is_null($this->roles()->whereIn('title', $roles)->first());
    }

}
