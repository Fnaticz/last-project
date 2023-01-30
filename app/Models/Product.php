<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $products = 'products';

    protected $fillable = [

        'nama', 'harga', 'subjek', 'user_id', 'alas', 'image',

    ];

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}
