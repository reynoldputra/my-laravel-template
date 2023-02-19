<?php

namespace Modules\Auth\Database\Seeders;

use App\Lib\SeederHelper;
use Illuminate\Database\Seeder;
use Modules\Auth\Entities\User;
use Illuminate\Database\Eloquent\Model;

class SeedUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        SeederHelper::csvSeed("Modules\Auth\Entities\User", base_path("Modules\Auth\Database\Seeders\Data\UserSeeder.csv"));
    }
}
