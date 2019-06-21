<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('students')->truncate();
        $faker = Factory::create();

        // Insert data
        for ($i=0; $i < 12; $i++)
        {
            $serial = "2076GSS" . rand(999999, 1111111);
            $data[] = [
              'serial' => $serial,
              'name' => $faker->name,
              'school' => 'Gyanodaya Secondary School',
              'phone' => '9880227545',
              'email' => $faker->email,
              'gpa' => rand(1, 4),
              'address' => $faker->address,
              'faculty_id' => rand(1, 5),
              'level_id' => '1',
              'gender' => "Male",
              'dob' => '2000/01/02',
              'image' => 'avatar_hat.jpg',
            ];
        }
        // Insert data
        for ($i=0; $i < 10; $i++)
        {
            $serial = "2076GSS" . rand(999999, 1111111);
            $data1[] = [
              'serial' => $serial,
              'name' => $faker->name,
              'school' => 'Gyanodaya Secondary School',
              'phone' => '9880227545',
              'email' => $faker->email,
              'gpa' => rand(1, 4),
              'address' => $faker->address,
              'faculty_id' => rand(1, 5),
              'level_id' => '1',
              'gender' => "Female",
              'dob' => '2000/01/02',
              'image' => 'avatar_hat.jpg',
            ];
        }
        DB::table('students')->insert($data);
        DB::table('students')->insert($data1);
    }
}
