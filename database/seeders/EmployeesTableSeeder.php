<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Generator as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 3; $i++) {
            $newEmployee = new Employee();
            $newEmployee->name = $faker->word();
            $newEmployee->level = $faker->randomElement(['junior', 'senior', 'manager']);
            $newEmployee->phone = $faker->randomNumber(9, true);
            $newEmployee->email = $faker->safeEmail();
            $newEmployee->save();
        }
    }
}
