
<?php

use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('sectors') as $sector) {
            Sector::create($sector);
        }
    }
}