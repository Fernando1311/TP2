<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PracticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Personas::factory(5000)->create();
        \App\Models\Autos::factory(5000)->create();
        \App\Models\Tranferencias::factory(5000)->create();
    }
}
