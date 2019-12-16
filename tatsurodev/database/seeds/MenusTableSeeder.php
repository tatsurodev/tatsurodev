<?php

use App\Locale;
use App\Menu;
use App\User;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    public function run()
    {
        $user = User::where('is_admin', true)->first();
        $localeJp = Locale::where('name', 'ja')->first()->id;
        $localeEn = Locale::where('name', 'en')->first()->id;
        // locale ja
        Menu::create([
            'name' => 'skill',
            'title' => 'My Skills',
            'description' => 'Laravelをメインのフレームワークとして使いこなせるよう学習中。バックをLaravel、フロントをNuxt.js等でウェブ開発できるようになることを直近の目標にしています。機械学習、ファイナンス関連の開発もできるようPythonも学習しています。',
            'fontawesome' => 'fa-code',
            'color' => 'primary',
            'user_id' => $user->id,
            'locale_id' => $localeJp,
        ]);
        Menu::create([
            'name' => 'portfolio',
            'title' => 'My Portfolios',
            'description' => 'Laravel、Vue.js、Scrapy等で作った制作物がメインです。',
            'fontawesome' => 'fa-briefcase',
            'color' => 'success',
            'user_id' => $user->id,
            'locale_id' => $localeJp,
        ]);
        Menu::create([
            'name' => 'book',
            'title' => 'My Book\'s Review',
            'description' => 'This section is under construction!',
            'fontawesome' => 'fa-book',
            'color' => 'warning',
            'user_id' => $user->id,
            'locale_id' => $localeJp,
        ]);
        Menu::create([
            'name' => 'udemy',
            'title' => 'My Udemy Course\'s Reviews',
            'description' => '修了したプログラミング系コースのレビューです。',
            'fontawesome' => 'fa-graduation-cap',
            'color' => 'danger',
            'user_id' => $user->id,
            'locale_id' => $localeJp,
        ]);
        Menu::create([
            'name' => 'contact',
            'title' => 'Contact Me',
            'description' => 'ツイッター、もしくはこちらのフォームからご連絡ください。',
            'fontawesome' => 'fa-envelope',
            'color' => 'dark',
            'user_id' => $user->id,
            'locale_id' => $localeJp,
        ]);
        // locale en
        Menu::create([
            'name' => 'skill',
            'title' => 'My Skills',
            'description' => 'Laravelをメインのフレームワークとして使いこなせるよう学習中。バックをLaravel、フロントをNuxt.js等でウェブ開発できるようになることを直近の目標にしています。機械学習、ファイナンス関連の開発もできるようPythonも学習しています。',
            'fontawesome' => 'fa-code',
            'color' => 'primary',
            'user_id' => $user->id,
            'locale_id' => $localeEn,
        ]);
        Menu::create([
            'name' => 'portfolio',
            'title' => 'My Portfolios',
            'description' => 'Laravel、Vue.js、Scrapy等で作った制作物がメインです。',
            'fontawesome' => 'fa-briefcase',
            'color' => 'success',
            'user_id' => $user->id,
            'locale_id' => $localeEn,
        ]);
        Menu::create([
            'name' => 'book',
            'title' => 'My Book\'s Review',
            'description' => 'This section is under construction!',
            'fontawesome' => 'fa-book',
            'color' => 'warning',
            'user_id' => $user->id,
            'locale_id' => $localeEn,
        ]);
        Menu::create([
            'name' => 'udemy',
            'title' => 'My Udemy Course\'s Reviews',
            'description' => '修了したプログラミング系コースのレビューです。',
            'fontawesome' => 'fa-graduation-cap',
            'color' => 'danger',
            'user_id' => $user->id,
            'locale_id' => $localeEn,
        ]);
        Menu::create([
            'name' => 'contact',
            'title' => 'Contact Me',
            'description' => 'ツイッター、もしくはこちらのフォームからご連絡ください。',
            'fontawesome' => 'fa-envelope',
            'color' => 'dark',
            'user_id' => $user->id,
            'locale_id' => $localeEn,
        ]);
    }
}
