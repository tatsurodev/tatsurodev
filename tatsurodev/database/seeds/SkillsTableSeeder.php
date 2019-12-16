<?php

use App\Skill;
use App\SkillLevel;
use App\Locale;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    public function run()
    {
        // locale_id取得
        $localeJa = Locale::where('name', 'ja')->first()->id;
        $localeEn = Locale::where('name', 'en')->first()->id;
        // skill_level_id取得
        $skillLevelId1 = SkillLevel::where('level', 1)->first()->id;
        $skillLevelId2 = SkillLevel::where('level', 2)->first()->id;
        $skillLevelId3 = SkillLevel::where('level', 3)->first()->id;
        $skillLevelId4 = SkillLevel::where('level', 4)->first()->id;
        $skillLevelId5 = SkillLevel::where('level', 5)->first()->id;
        // locale ja
        Skill::create([
            'name' => 'HTML5',
            'skill_level_id' => $skillLevelId4,
            'message' => '',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'CSS3',
            'skill_level_id' => $skillLevelId3,
            'message' => 'スタイリングをBootstrapで済ませてしまうことが多く、苦手',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Bootstrap4',
            'skill_level_id' => $skillLevelId3,
            'message' => 'Laravelのviewでもよく使用',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'MySQL',
            'skill_level_id' => $skillLevelId2,
            'message' => '',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'PostgreSQL',
            'skill_level_id' => $skillLevelId2,
            'message' => 'SQL学習のため、<a href="https://oss-db.jp/outline/silver" target="_blank">OSS-DB Silver</a>取得',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Javascript',
            'skill_level_id' => $skillLevelId3,
            'message' => '',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Vue.js',
            'skill_level_id' => $skillLevelId3,
            'message' => 'Laravelのフロントエンド開発に使用中',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Nuxt.js',
            'skill_level_id' => $skillLevelId3,
            'message' => '',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'PHP',
            'skill_level_id' => $skillLevelId4,
            'message' => 'ウェブ開発にメインで使用している言語です',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Laravel',
            'skill_level_id' => $skillLevelId4,
            'message' => '初めて学習したウェブフレイムワーク',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Python',
            'skill_level_id' => $skillLevelId2,
            'message' => '目下学習中',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Scrapy',
            'skill_level_id' => $skillLevelId2,
            'message' => '認証ありサイト、画像収集、seleniumとの連携',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Machine Learning',
            'skill_level_id' => $skillLevelId1,
            'message' => 'Andrew Ng先生の<a href="https://www.coursera.org/learn/machine-learning" tartget="_blank">機械学習コース</a>を一時休止中',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Git',
            'skill_level_id' => $skillLevelId3,
            'message' => '',
            'locale_id' => $localeJa,
        ]);
        Skill::create([
            'name' => 'Docker',
            'skill_level_id' => $skillLevelId1,
            'message' => 'laradockで使用中',
            'locale_id' => $localeJa,
        ]);
        // locale en
        Skill::create([
            'name' => 'HTML5',
            'skill_level_id' => $skillLevelId4,
            'message' => '',
            'locale_id' => $localeEn,
        ]);
        Skill::create([
            'name' => 'CSS3',
            'skill_level_id' => $skillLevelId3,
            'message' => 'スタイリングをBootstrapで済ませてしまうことが多く、苦手',
            'locale_id' => $localeEn,
        ]);
        Skill::create([
            'name' => 'Bootstrap4',
            'skill_level_id' => $skillLevelId3,
            'message' => 'Laravelのviewでもよく使用',
            'locale_id' => $localeEn,
        ]);
    }
}
