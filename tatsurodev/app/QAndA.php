<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QAndA extends Model
{
    /**
     * Relations
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
