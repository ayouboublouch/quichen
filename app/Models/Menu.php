<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'menu_has_menu_items');
    }
}