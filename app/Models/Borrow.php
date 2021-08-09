<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    //kolom database yang diisi secara masal
    protected $fillable = [
        'user_id',
        'book_id',
        'return',
        'deadline',
        'period'
    ];

    //kolom database yang seharusnya tidak ditampilkan di JSON
    protected $hidden = [
        'user_id',
        'book_id'
    ];

    //kolom database yang perlu di konversi menjadi tipe data tertentu
    protected $casted = [
        'return' => 'dateTime',
        'deadline' => 'dateTime',
        'period' => 'dateTime'
    ];
}
