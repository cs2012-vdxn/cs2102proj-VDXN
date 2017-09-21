<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * WARNING: RE-RUNNING THIS SEED WILL DELETE ALL ROWS OF THE TABLE.
     *
     * @return void
     */
    public function run()
    {
        // Note: You can use Model Factories to generate larger amounts of data
        // And not have to INSERT one by one

        DB::table('tasks')->delete();

        DB::table('tasks')->insert([
            'title' => 'Wash my car parked in COM2 carpark',
            'description' => 'My car is a sports car and is very shiny. I want it to be even shinier.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('tasks')->insert([
            'title' => 'Pick up my assignment from Prof Bressan.',
            'description' => 'His office is at #02-32 or something.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('tasks')->insert([
            'title' => 'Do my CS2102 assignment.',
            'description' => 'Please get full marks.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
