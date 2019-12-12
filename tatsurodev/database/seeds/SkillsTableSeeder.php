<?php

use App\Skill;
use App\SkillLevel;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    public function run()
    {
        Skill::create([
            'name' => 'HTML5',
            'skill_level_id' => SkillLevel::where('level', 4)->first()->id,
            'message' => '',
        ]);
        Skill::create([
            'name' => 'CSS3',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => 'スタイリングをBootstrapで済ませてしまうことが多く、苦手',
        ]);
        Skill::create([
            'name' => 'Bootstrap4',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => 'Laravelのviewでもよく使用',
        ]);
        Skill::create([
            'name' => 'MySQL',
            'skill_level_id' => SkillLevel::where('level', 2)->first()->id,
            'message' => '',
        ]);
        Skill::create([
            'name' => 'PostgreSQL',
            'skill_level_id' => SkillLevel::where('level', 2)->first()->id,
            'message' => 'SQL学習のため、<a href="https://oss-db.jp/outline/silver" target="_blank">OSS-DB Silver</a>取得',
        ]);
        Skill::create([
            'name' => 'Javascript',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => '',
        ]);
        Skill::create([
            'name' => 'Vue.js',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => 'Laravelのフロントエンド開発に使用中',
        ]);
        Skill::create([
            'name' => 'Nuxt.js',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => '',
        ]);
        Skill::create([
            'name' => 'PHP',
            'skill_level_id' => SkillLevel::where('level', 4)->first()->id,
            'message' => 'ウェブ開発にメインで使用している言語です',
        ]);
        Skill::create([
            'name' => 'Laravel',
            'skill_level_id' => SkillLevel::where('level', 4)->first()->id,
            'message' => '初めて学習したウェブフレイムワーク',
        ]);
        Skill::create([
            'name' => 'Python',
            'skill_level_id' => SkillLevel::where('level', 2)->first()->id,
            'message' => '目下学習中',
        ]);
        Skill::create([
            'name' => 'Scrapy',
            'skill_level_id' => SkillLevel::where('level', 2)->first()->id,
            'message' => '認証ありサイト、画像収集、seleniumとの連携',
        ]);
        Skill::create([
            'name' => 'Machine Learning',
            'skill_level_id' => SkillLevel::where('level', 1)->first()->id,
            'message' => 'Andrew Ng先生の<a href="https://www.coursera.org/learn/machine-learning" tartget="_blank">機械学習コース</a>を一時休止中',
        ]);
        Skill::create([
            'name' => 'Git',
            'skill_level_id' => SkillLevel::where('level', 3)->first()->id,
            'message' => '',
        ]);
        Skill::create([
            'name' => 'Docker',
            'skill_level_id' => SkillLevel::where('level', 1)->first()->id,
            'message' => 'laradockで使用中',
        ]);
    }
}
