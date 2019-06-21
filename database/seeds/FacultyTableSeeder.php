<?php

use App\Faculty;
use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert the data
        $data = new Faculty;
        $data->name = 'Science';
        $data->save();

        $data = new Faculty;
        $data->name = 'Management';
        $data->save();

        $data = new Faculty;
        $data->name = 'Law';
        $data->save();

        $data = new Faculty;
        $data->name = 'Humanities';
        $data->save();

        $data = new Faculty;
        $data->name = 'Eduaction';
        $data->save();
    }
}
