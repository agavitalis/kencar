<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    public function brand() : BelongsTo
    {
        return $this->belongsTo(VehicleBrand::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(VehicleCategory::class);
    }

    public function pictures() : HasMany
    {
        return $this->hasMany(VehiclePicture::class);
    }

}
