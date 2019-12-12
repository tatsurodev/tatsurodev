<?php

use App\Menu;
use App\QAndA;
use Illuminate\Database\Seeder;

class QAndAsTableSeeder extends Seeder
{

    public function run()
    {
        QAndA::create([
            'question' => 'At which coding level do I think I am?',
            'answer' => '2017年からプログラミングの学習を開始しています。言語はPHP、次にJavascriptあたりが得意です。Pythonは、ほぼ初心者。プログラミングとは別に、機械学習、ブロックチェーン、フィンテック勉強中です。',
            'menu_id' => Menu::where('name', 'skill')->first()->id,
        ]);
        QAndA::create([
            'question' => 'What kind of app did you create?',
            'answer' => 'ブログ、フォーラム、ショッピングサイト、近眼者向けメガネシェアサイト等を作成しました',
            'menu_id' => Menu::where('name', 'portfolio')->first()->id,
        ]);
        QAndA::create([
            'question' => 'What kind of books did you read?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.',
            'menu_id' => Menu::where('name', 'book')->first()->id,
        ]);
        QAndA::create([
            'question' => 'What kind of courses do you take?',
            'answer' => '基本的に、その分野で評価の高い、言語は英語で、必ず英語キャプションが付いているものを選ぶようにしています。いくら英語ネイティブにとって評価の高いものでも、非ネイティブにとって聞き取りきれないものも多いので、キャプションがあると安心です。',
            'menu_id' => Menu::where('name', 'udemy')->first()->id,
        ]);
        QAndA::create([
            'question' => 'Get In Touch',
            'answer' => 'どんな内容でもお気軽にどうぞ！',
            'menu_id' => Menu::where('name', 'contact')->first()->id,
        ]);
    }
}
