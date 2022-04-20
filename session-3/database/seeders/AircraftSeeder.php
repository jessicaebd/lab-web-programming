<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AircraftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Airplane',
            'name' => 'Boeing 777-300ER',
            'price' => 70813000,
            'registration' => 'B-16701',
            'image_path' => 'Airplane-1.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Airplane',
            'name' => 'Boeing 747-8F',
            'price' => 350000000,
            'registration' => 'N609UP',
            'image_path' => 'Airplane-2.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Airplane',
            'name' => 'Airbus A330-743L Beluga XL',
            'price' => 33850000,
            'registration' => 'F-GXLH',
            'image_path' => 'Airplane-3.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Airplane',
            'name' => 'Airbus A321-251NX',
            'price' => 110250000,
            'registration' => 'D-AVZM',
            'image_path' => 'Airplane-4.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Airplane',
            'name' => 'Bombardier CRJ-1000',
            'price' => 49110000,
            'registration' => 'EC-LJR',
            'image_path' => 'Airplane-5.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Helicopter',
            'name' => 'Agusta A-109E Power',
            'price' => 59500000,
            'registration' => 'D-HBHB',
            'image_path' => 'Helicopter-1.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Helicopter',
            'name' => 'Aérospatiale AS 332L1 Super Puma',
            'price' => 15425000,
            'registration' => 'C-FPUK',
            'image_path' => 'Helicopter-2.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Helicopter',
            'name' => 'Sikorsky S-54B Skycrane',
            'price' => 32152000,
            'registration' => 'N721HT',
            'image_path' => 'Helicopter-3.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Helicopter',
            'name' => 'Eurocopter EC155 B1',
            'price' => 7750000,
            'registration' => 'D-HFLG',
            'image_path' => 'Helicopter-4.jpg'
        ]);

        DB::table('aircraft')->insert([
            'id' => Str::uuid(),
            'type' => 'Helicopter',
            'name' => 'Bell 429 Global Ranger',
            'price' => 6357000,
            'registration' => 'HI1030',
            'image_path' => 'Helicopter-5.jpg'
        ]);
    }
}
