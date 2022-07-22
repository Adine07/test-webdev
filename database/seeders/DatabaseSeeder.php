<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Maps;
use App\Models\Polygroup;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Maps::truncate();
        
        Maps::create([
            'lat' => '-7.792869077903917',
            'long' => '110.3791204219175',
            'area_number' => '1234567891',
            'farmer' => 'Jony',
            'polygon' => 1,
        ]);

        Maps::create([
            'lat' => '-7.794199620208683',
            'long' => '110.37658713575176',
            'area_number' => '1234567892',
            'farmer' => 'Tony',
            'polygon' => 1,
        ]);

        Maps::create([
            'lat' => '-7.795378960988559',
            'long' => '110.37857103455626',
            'area_number' => '1234567893',
            'farmer' => 'Fery',
            'polygon' => 1,
        ]);

        Maps::create([
            'lat' => '-7.7936250683686',
            'long' => '110.37231412294209',
            'area_number' => '1234567896',
            'farmer' => 'Widada',
            'polygon' => 2,
        ]);

        Maps::create([
            'lat' => '-7.7951975241618',
            'long' => '110.3718868216611',
            'area_number' => '1234567897',
            'farmer' => 'Asep',
            'polygon' => 2,
        ]);

        Maps::create([
            'lat' => '-7.795499918829373',
            'long' => '110.37442010782685',
            'area_number' => '1234567898',
            'farmer' => 'Paryanto',
            'polygon' => 2,
        ]);

        // Polygroup::truncate();

        // Polygroup::create([
        //     'maps_id' => 1,
        //     'group' => 1,
        // ]);

        // Polygroup::create([
        //     'maps_id' => 2,
        //     'group' => 1,
        // ]);

        // Polygroup::create([
        //     'maps_id' => 3,
        //     'group' => 1,
        // ]);

        // Polygroup::create([
        //     'maps_id' => 4,
        //     'group' => 2,
        // ]);

        // Polygroup::create([
        //     'maps_id' => 5,
        //     'group' => 2,
        // ]);

        // Polygroup::create([
        //     'maps_id' => 6,
        //     'group' => 2,
        // ]);
    }
}
