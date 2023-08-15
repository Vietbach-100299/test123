<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // khoi tao doi tuong faker
        $faker = Faker::create();
        //chay vong lap xac dinh so ban ghi va kieu du lieu sinh tu faker
        for($i=0;$i<50;$i++){
            Employee::create([
                'name'=>$faker->name,
                'address'=>$faker->address,
                'salary'=>$faker->numberBetween($min = 2000, $max = 10000),
            ]);
        }
    }
}
