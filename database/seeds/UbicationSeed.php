<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed of ubications

        // Insert ubications
        DB::table('ubications')->insert([
            'name' => 'Merida Yucatan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubications')->insert([
            'name' => 'Mexico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubications')->insert([
            'name' => 'Guadalajara',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('ubications')->insert([
            'name' => 'Monterrey',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
