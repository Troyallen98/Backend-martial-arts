<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PositionTechnique;

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
