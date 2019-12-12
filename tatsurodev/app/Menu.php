<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
     * Relations
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function qAndAs()
    {
        return $this->hasMany(QAndA::class);
    }
}
