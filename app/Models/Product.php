<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $products = 'products';

    protected $fillable = [

        'nama', 'harga', 'subjek', 'category_id', 'user_id', 'alas', 'image',

    ];

    protected $guarded = ['id'];

    public function category()
    {
    	return $this->belongTo(Category::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function playtime()
    {
        return $this->belongTo(playtime::class);
    }
}
