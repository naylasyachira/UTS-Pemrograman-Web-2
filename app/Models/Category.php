<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

     protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
