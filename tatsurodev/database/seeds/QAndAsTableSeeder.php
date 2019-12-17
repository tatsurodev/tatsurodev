<?php

use App\Locale;
use App\Menu;
use App\QAndA;
use Illuminate\Database\Seeder;

class QAndAsTableSeeder extends Seeder
{

    public function run()
    {
        // locale_idを変数に格納
        $localeIdJa = Locale::where('name', 'ja')->first()->id;
        $localeIdEn = Locale::where('name', 'en')->first()->id;

        // locale ja menu
        $skillJa = Menu::where('name', 'skill')->where('locale_id', $localeIdJa)->first();
        $portfolioJa = Menu::where('name', 'portfolio')->where('locale_id', $localeIdJa)->first();
        $bookJa = Menu::where('name', 'book')->where('locale_id', $localeIdJa)->first();
        $udemyJa = Menu::where('name', 'udemy')->where('locale_id', $localeIdJa)->first();
        $contactJa = Menu::where('name', 'contact')->where('locale_id', $localeIdJa)->first();
        // local en menu
        $skillEn = Menu::where('name', 'skill')->where('locale_id', $localeIdEn)->first();
        $portfolioEn = Menu::where('name', 'portfolio')->where('locale_id', $localeIdEn)->first();
        $bookEn = Menu::where('name', 'book')->where('locale_id', $localeIdEn)->first();
        $udemyEn = Menu::where('name', 'udemy')->where('locale_id', $localeIdEn)->first();
        $contactEn = Menu::where('name', 'contact')->where('locale_id', $localeIdEn)->first();

        // locale jp
        $skillJa->qAndAs()->create([
            'question' => 'プログラミング歴は?',
            'answer' => '2017年からプログラミングの学習を開始しています。言語はPHP、次にJavascriptあたりが得意です。Pythonは、ほぼ初心者。プログラミングとは別に、機械学習、ブロックチェーン、フィンテック勉強中です。',
        ]);
        $portfolioJa->qAndAs()->create([
            'question' => 'いままでどんなサイトアプリ作った?',
            'answer' => 'ブログ、フォーラム、ショッピングサイト、近眼者向けメガネシェアサイト等を作成しました',
        ]);
        $bookJa->qAndAs()->create([
            'question' => '技術書はどんなものを読みましたか?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.',
        ]);
        $udemyJa->qAndAs()->create([
            'question' => 'どんなコースを受けてますか?',
            'answer' => '基本的に、その分野で評価の高い、言語は英語で、必ず英語キャプションが付いているものを選ぶようにしています。いくら英語ネイティブにとって評価の高いものでも、非ネイティブにとって聞き取りきれないものも多いので、キャプションがあると安心です。',
        ]);
        $contactJa->qAndAs()->create([
            'question' => 'ツイッターやってる?',
            'answer' => 'ほぼロム専です、たまに質問に使ったり程度です',
        ]);
        // locale ne
        $skillEn->qAndAs()->create([
            'question' => 'プログラミング歴は?',
            'answer' => '2017年からプログラミングの学習を開始しています。言語はPHP、次にJavascriptあたりが得意です。Pythonは、ほぼ初心者。プログラミングとは別に、機械学習、ブロックチェーン、フィンテック勉強中です。',
        ]);
        $portfolioEn->qAndAs()->create([
            'question' => 'いままでどんなサイトアプリ作った?',
            'answer' => 'ブログ、フォーラム、ショッピングサイト、近眼者向けメガネシェアサイト等を作成しました',
        ]);
        $bookEn->qAndAs()->create([
            'question' => '技術書はどんなものを読みましたか?',
            'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum repudiandae debitis, nam iste amet.',
        ]);
        $udemyEn->qAndAs()->create([
            'question' => 'どんなコースを受けてますか?',
            'answer' => '基本的に、その分野で評価の高い、言語は英語で、必ず英語キャプションが付いているものを選ぶようにしています。いくら英語ネイティブにとって評価の高いものでも、非ネイティブにとって聞き取りきれないものも多いので、キャプションがあると安心です。',
        ]);
        $contactEn->qAndAs()->create([
            'question' => 'ツイッターやってる?',
            'answer' => 'ほぼロム専です、たまに質問に使ったり程度です',
        ]);
    }
}
