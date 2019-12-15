<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = ['id'];
    /**
     * Relation
     */
    public function skillLevel()
    {
        return $this->belongsTo(SkillLevel::class);
    }
}
