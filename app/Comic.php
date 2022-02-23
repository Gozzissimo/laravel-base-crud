<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'isbn',
        'title',
        'number',
        'author',
        'format',
        'publisher',
        'edition',
        'language',
        'pages',
        'price',
        'created_at',
        'updated_at',
    ];
}
