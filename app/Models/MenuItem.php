<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'menu_id',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_has_menu_items');
    }
}