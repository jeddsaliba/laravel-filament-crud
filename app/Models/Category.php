<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    protected $casts = [
        'name' => 'string',
        'slug' => 'string'
    ];

    protected $guarded = [];
}
