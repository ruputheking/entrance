<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the data
        $data = new Level;
        $data->name = 'XI';
        $data->save();
    }
}
