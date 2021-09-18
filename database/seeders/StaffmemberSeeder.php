<?php

namespace Database\Seeders;

use App\Models\StaffMember;
use Illuminate\Database\Seeder;

class StaffmemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaffMember::create(
        [
        'first_name' => 'Dolo',
        'last_name' => 'Adaman',
        'birth_day' => '2021-09-18 17:58:05',
        'contact' => '2241235365',
        'description' => 'la lala lala lala lala la',
        'photo' => 'la lala lala lala lala la',
        ]);

        StaffMember::create(
            [
            'first_name' => 'Roger',
            'last_name' => 'Bi',
            'birth_day' => '2021-09-18 17:58:05',
            'contact' => '2285495365',
            'description' => 'la lala lala lala lala la',
            'photo' => 'la lala lala lala lala la',
            ]);

            StaffMember::create(
                [
                'first_name' => 'Gaston',
                'last_name' => 'Côcôti',
                'birth_day' => '2021-09-18 17:58:05',
                'contact' => '2285695365',
                'description' => 'la lala lala lala lala la',
                'photo' => 'la lala lala lala lala la',
                ]);

        
    }
}
