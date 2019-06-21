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
        $this->call(LevelTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ResultTableSeeder::class);
    }
}
