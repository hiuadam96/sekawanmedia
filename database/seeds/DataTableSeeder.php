<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {

            DB::table('data')->insert([
                'id' => 1,
                'employee_name' => 'Tiger Nixon',
                'employee_salary' => '320800',
                'employee_age' => 61,
                
            ]);
           
            DB::table('data')->insert([
                'id' => 2,
                'employee_name' => 'Garrett Winters',
                'employee_salary' => '170750',
                'employee_age' => 63,
               
            ]);
            DB::table('data')->insert([
                'id' => 3,
                'employee_name' => 'Ashton Cox',
                'employee_salary' => '86000',
                'employee_age' => 66,
                
            ]);
            DB::table('data')->insert([
                'id' => 4,
                'employee_name' => 'Cedric Kelly',
                'employee_salary' => '433060',
                'employee_age' => 22,
               
            ]);
            DB::table('data')->insert([
                'id' => 5,
                'employee_name' => 'Airi Satou',
                'employee_salary' => '162700',
                'employee_age' => 33,
               
            ]);
            DB::table('data')->insert([
                'id' => 6,
                'employee_name' => 'Brielle Williamson',
                'employee_salary' => '372000',
                'employee_age' => 61,
               
            ]);
            DB::table('data')->insert([
                'id' => 7,
                'employee_name' => 'Herrod Chandler',
                'employee_salary' => '137500',
                'employee_age' => 59,
               
            ]);
            DB::table('data')->insert([
                'id' => 8,
                'employee_name' => 'Rhona Davidson',
                'employee_salary' => '327900',
                'employee_age' => 55,
               
            ]);
           
        }
    }
}
