<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalarySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed of salaries

        // Insert salaries
        DB::table('salaries')->insert([
            'name' => '$ 10, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('salaries')->insert([
            'name' => '$ 15, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('salaries')->insert([
            'name' => '$ 20, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('salaries')->insert([
            'name' => '$ 25, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('salaries')->insert([
            'name' => '$ 30, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('salaries')->insert([
            'name' => '$ 35, 000 MXN',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


    }
}
