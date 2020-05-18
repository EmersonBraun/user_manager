
<?php

use Illuminate\Database\Seeder;
use App\Models\PhoneType;

class PhoneTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('phone_types') as $phoneType) {
            PhoneType::create(['phone_type' => $phoneType]);
        }
    }
}
