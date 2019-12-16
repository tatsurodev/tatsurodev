<?php

namespace App;

// use App\Traits\Localized;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // use Localized;

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
