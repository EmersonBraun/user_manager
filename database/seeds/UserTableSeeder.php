
<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 10;
        factory(User::class, $amount)->create()->each(function ($user) {
            $user->groups()->saveMany(factory(Group::class, 2)->make());
        });
    }
}