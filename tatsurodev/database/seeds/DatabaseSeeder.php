<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(LocalesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(QAndAsTableSeeder::class);
        $this->call(SkillLevelsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
