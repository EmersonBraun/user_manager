
<?php

use Illuminate\Database\Seeder;
use App\Models\IP;

class IPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baseIp = '10.147.214.';
        for ($i=0; $i < 255; $i++) { 
            IP::create([
                'ip' => $baseIp.$i,
                'used' => false,
            ]);
        }
    }
}