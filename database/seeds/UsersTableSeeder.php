<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'info@admin.com';
        $user->password = bcrypt('admin');
        $user->role = 'Admin';
        $user->save();

        // Insert data
        $user = new User;
        $user->name = 'Editor';
        $user->email = 'info@editor.com';
        $user->password = bcrypt('editor');
        $user->role = 'Editor';
        $user->save();
    }
}
