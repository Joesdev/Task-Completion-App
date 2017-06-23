<?php

use Illuminate\Database\Seeder;

class ToDosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 7 rows of dummy data
        factory(App\ToDo::class, 7)->create();
    }
}
