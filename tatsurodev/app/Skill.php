<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Localized;

class Skill extends Model
{
    use Localized;

    protected $guarded = ['id'];
    /**
     * Relation
     */
    public function skillLevel()
    {
        return $this->belongsTo(SkillLevel::class);
    }
}
