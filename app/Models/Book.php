<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // এই লাইনটা দরকার
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'published_date',
        'genre',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];
}
