<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    /**
     * Relation
     */
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
