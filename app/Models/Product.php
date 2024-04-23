<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    const MODULE = 'Product Management';

    protected $table = 'products';

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'description',
        'slug',
        'price'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'slug' => 'string',
        'price' => 'float'
    ];

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
