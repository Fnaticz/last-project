<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $products = 'products';

    protected $fillable = [

        'first_team', 'second_team', 'first_team_score', 'second_team_score', 'user_id', 'image',

    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
