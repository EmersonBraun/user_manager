
<?php

use Illuminate\Database\Seeder;
use App\Models\Graduation;

class GraduationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('graduations') as $graduation) {
            Graduation::create(['graduation' => $graduation]);
        }
    }
}