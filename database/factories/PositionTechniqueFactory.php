<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Technique;
use App\Models\Position;

class PositionTechniqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position_id' => Position::all()->random()->id,
            'technique_id' => Technique::all()->random()->id,
            'inverse_tech_id' => Technique::all()->random()->id,
        ];
    }
}
