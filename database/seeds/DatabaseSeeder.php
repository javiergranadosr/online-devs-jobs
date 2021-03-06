<?php

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
         $this->call(UserSeed::class);
         $this->call(CategorySeed::class);
         $this->call(ExperienceSeed::class);
         $this->call(UbicationSeed::class);
         $this->call(SalarySeed::class);
    }
}
