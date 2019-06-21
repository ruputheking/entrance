<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
class ResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();

      // Insert data
      for ($i=0; $i < 12; $i++)
      {
          $serial = "2076GSS" . rand(999999, 1111111);
          $data[] = [
            'serial' => $serial,
            'name' => $faker->name,
            'faculty' => 'Management',
            'gender' => 'Male',
            'dob' => '2000/01/02',
            'status' => 'Pass',
          ];
      }
      // Insert data
      for ($i=0; $i < 10; $i++)
      {
          $serial = "2076GSS" . rand(999999, 1111111);
          $data1[] = [
            'serial' => $serial,
            'name' => $faker->name,
            'faculty' => 'Science',
            'gender' => 'Female',
            'dob' => '2000/01/02',
            'status' => 'Fail',
          ];
      }
      DB::table('results')->insert($data);
      DB::table('results')->insert($data1);
    }
}
