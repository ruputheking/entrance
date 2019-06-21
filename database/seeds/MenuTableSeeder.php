<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inser data
        $data = new Menu;
        $data->name = 'Log in';
        $data->route = 'login';
        $data->status = '1';
        $data->save();

        $data = new Menu;
        $data->name = 'Result';
        $data->route = 'entrance.search';
        $data->status = '1';
        $data->save();

        $data = new Menu;
        $data->name = 'Entrance';
        $data->route = 'entrance';
        $data->status = '1';
        $data->save();
    }
}
