<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';

    // protected $primaryKey = 'id';

    protected $fillable = [
        
        'namateam', 'namapenanggungjawab', 'alamat', 'notelepon', 'tglmain', 'playtime_id'
    
    ];

    public function playtime()
    {
        return $this->belongTo(playtime::class);
    }
}
