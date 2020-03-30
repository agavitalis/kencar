<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleCategory extends Model
{
    use SoftDeletes;

    public function vehicles() : HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

}
