<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MenuHasMenuItem extends Pivot
{
    protected $table = 'menu_has_menu_items';

    protected $fillable = [
        'menu_id',
        'menu_item_id',
    ];
}