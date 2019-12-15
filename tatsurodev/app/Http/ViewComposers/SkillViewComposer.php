<?php

namespace App\Http\ViewComposers;

use App\Skill;

class SkillViewComposer
{
    public function compose($view)
    {
        $view->with('skills', Skill::all());
    }
}
