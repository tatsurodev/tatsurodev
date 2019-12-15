<?php

use App\SkillLevel;
use Illuminate\Database\Seeder;

class SkillLevelsTableSeeder extends Seeder
{

    public function run()
    {
        SkillLevel::create([
            'level' => 1,
            'color' => 'danger',
        ]);
        SkillLevel::create([
            'level' => 2,
            'color' => 'warning',
        ]);
        SkillLevel::create([
            'level' => 3,
            'color' => 'success',
        ]);
        SkillLevel::create([
            'level' => 4,
            'color' => 'primary',
        ]);
        SkillLevel::create([
            'level' => 5,
            'color' => 'secondary',
        ]);
    }
}
