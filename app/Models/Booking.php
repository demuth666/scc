<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'nama_lengkap',
        'nama_komunitas',
        'alamat',
        'desa',
        'kecamatan',
        'telepon',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'tanggal',
        'start_time',
        'end_time',
        'status'
    ];

    public function room()
    {
        return $this->belongsTo(Rooms::class);
    }
}
