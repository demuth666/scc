<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
      'facility_name',
      'icon'
    ];

    public function rooms(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Rooms::class, 'facility_room');
    }
}
