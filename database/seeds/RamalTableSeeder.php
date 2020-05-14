
<?php

use Illuminate\Database\Seeder;
use App\Models\Ramal;

class RamalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // foreach (config('ramals') as $ramal) {
        //     Ramal::create(['ramal' => $ramal]);
        // }
        $amount = 10;
        factory(Ramal::class, $amount)->create();
    }
}