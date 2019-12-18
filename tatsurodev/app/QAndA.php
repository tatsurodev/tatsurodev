<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QAndA extends Model
{
    protected $guarded = ['id',];
    /**
     * Relations
     */
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
