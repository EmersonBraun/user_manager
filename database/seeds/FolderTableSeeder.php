
<?php

use Illuminate\Database\Seeder;
use App\Models\Folder;

class FolderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('folders') as $folder) {
            Folder::create(['folder' => $folder]);
        }
    }
}
