<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'parent_id'];

    // Recursive relationship for children menus
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    // Get the parent of this menu item
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
