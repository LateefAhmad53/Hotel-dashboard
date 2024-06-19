<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'room_id',
        'check_in',
        'check_out',
        'status',
    ];

    public function guest()
    {
        return $this->belongsTo('App\Models\Guest');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    public function payment()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
