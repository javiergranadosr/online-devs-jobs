<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed of users

        // Insert users
        DB::table('users')->insert([
            'name' => 'Javier Granados Rojas',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('juy123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Granados Rojas',
            'email' => 'admin2@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('juy123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);




    }
}
