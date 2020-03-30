<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use SoftDeletes;

    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id');
    }

}
