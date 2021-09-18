<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::create(['name' => 'Attaquant']);
        Work::create(['name' => 'Defenseur']);
        Work::create(['name' => 'Gardien de But']);
        Work::create(['name' => 'Milieu']);
    }
}
