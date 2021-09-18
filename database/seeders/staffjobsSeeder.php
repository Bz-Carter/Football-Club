<?php

namespace Database\Seeders;

use App\Models\StaffJob;
use Illuminate\Database\Seeder;

class staffjobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaffJob::create(['name' => 'Entraineur']);
        StaffJob::create(['name' => 'Entraineur assistant']);
        StaffJob::create(['name' => 'Medecin']);
    }
}
