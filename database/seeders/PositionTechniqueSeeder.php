<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PositionTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PositionTechnique::factory(100)->create();
    }
}
