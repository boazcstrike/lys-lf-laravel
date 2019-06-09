<?php

use App\Employee_Type;
use Illuminate\Database\Seeder;

class Employee_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee_Type::class, 20)->create();
    }
}