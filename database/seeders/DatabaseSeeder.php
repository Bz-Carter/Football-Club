<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WorksSeeder::class);
        $this->call(staffjobsSeeder::class);
        $this->call(StaffmemberSeeder::class);
        
    }
}
