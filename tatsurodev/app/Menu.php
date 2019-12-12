<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * Relation
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
