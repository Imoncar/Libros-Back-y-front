<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'published_year',
        'isbn',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
