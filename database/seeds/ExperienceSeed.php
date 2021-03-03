<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed of experiences

        // Insert categories
        DB::table('experiences')->insert([
            'name' => '0 - 6 Meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '6 Meses - 1 Año',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '1 - 3 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '3 - 5 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '5 - 7 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '7 - 10 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
            'name' => '10 - 12 Años',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('experiences')->insert([
        'name' => '12 - 15 Años',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);

    }
}
