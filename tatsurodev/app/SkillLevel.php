<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillLevel extends Model
{
    /**
     * Relation
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
