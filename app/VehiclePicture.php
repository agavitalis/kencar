<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehiclePicture extends Model
{
    use SoftDeletes;

    public function vehicle() : BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

}
