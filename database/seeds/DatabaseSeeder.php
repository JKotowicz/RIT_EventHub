<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(UsersTableSeeder::class);
        $this->call(DobsTableSeeder::class);
        $this->call(Phone_numbersTableSeeder::class);
        $this->call(EventsTableSeeder::class);
    }
}
