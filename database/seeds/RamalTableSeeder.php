
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
        for ($i=1050; $i < 1082; $i++) { 
            Ramal::create([
                'ramal' => $i,
                'used' => false,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}