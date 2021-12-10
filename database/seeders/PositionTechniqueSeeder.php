<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PositionTechnique;
use App\Models\Technique;
use App\Models\Position;

class PositionTechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techniques = Technique::all();
        for ($i = 0; $i < count($techniques); $i++) {
            $positionTechnique = new PositionTechnique();
            $positionTechnique->position_id = Position::all()->random()->id;
            $positionTechnique->technique_id = $techniques[$i]['id'];
            $positionTechnique->inverse_tech_id = Technique::all()->random()->id;
            $positionTechnique->save();
        }
    }
}
