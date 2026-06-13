<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'category_id',
        'name',
        'price',
        'stock',
        'description',
        'rating',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
