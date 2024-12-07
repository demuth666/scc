<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Rooms extends Model
{
    protected $table = 'rooms';

    protected $fillable = [
        'room_name',
        'description',
        'images'
    ];

    protected static function booted()
    {
        static::deleting(function ($room) {
            if($room->images){
                Storage::disk('public')->delete($room->images);
            }
        });
    }
}
