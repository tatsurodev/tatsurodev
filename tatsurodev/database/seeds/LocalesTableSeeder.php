<?php

use App\Locale;
use Illuminate\Database\Seeder;

class LocalesTableSeeder extends Seeder
{

    public function run()
    {
        Locale::create([
            'name' => 'ja',
            'language' => '日本語',
            'is_default' => true,
        ]);
        Locale::create([
            'name' => 'en',
            'language' => 'English',
            'is_default' => false,
        ]);
    }
}
