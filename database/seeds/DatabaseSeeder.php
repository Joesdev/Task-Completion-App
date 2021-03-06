<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Runs the ToDosTable Seeder
        $this->call(ToDosTableSeeder::Class);
    }
}
