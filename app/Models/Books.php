<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'nisbn',
        'title',
        'description',
        'image_url',
        'rating',
        'stock',
        'publisher_id',
        'author_id'
    ];

    protected $hidden =[
        'publisher_id',
        'author_id'
    ];

    protected $casts =[
        'rating' => 'double',
        'stock' => 'integer'
    ];
}
