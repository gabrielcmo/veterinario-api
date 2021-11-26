<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Dog;
use \App\Models\Doctor;
use \App\Models\Treatment;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
            Seeder da tabela Status do Tratamento
        */
        DB::table('treatment_statuses')->insert([
            ['name' => "in diagnosis"],
            ['name' => "waiting for treatment"],
            ['name' => "in treatment"], 
            ['name' => "healed"]
        ]);

        User::factory(10)->create();
        Dog::factory(10)->create();
        Doctor::factory(10)->create();
        Treatment::factory(10)->create();
    }
}
