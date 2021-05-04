<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Academic;
use App\Models\Departament;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Departament::factory(10)->create();
        User::factory(50)->create()->each(function($q){
            $q->academic()->saveMany(Academic::factory(1)->make());
        });
    }
}
