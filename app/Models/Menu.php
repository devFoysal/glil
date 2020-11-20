<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Submenu;

class Menu extends Model
{
    protected $guarded = [];

    public function submenus()
    {
        return $this->hasMany(Submenu::class, 'menu_id')->orderBy('orders', 'asc');
    }
}
