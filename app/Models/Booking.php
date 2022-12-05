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
        return $this->belongsTo(playtime::class, "playtime_id");
    }

    public function product()
    {
        return $this->belongsTo(Product::class, "product_id");
    }
}
