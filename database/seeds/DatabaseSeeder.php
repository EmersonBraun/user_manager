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
        $this->call([
            GraduationTableSeeder::class,
            GroupTableSeeder::class,
            IPTableSeeder::class,
            SectorTableSeeder::class,
            RamalTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
