<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class positionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'technique_id' => Technique::all()->random()->id,
            'inverse_tech_id' => Technique::all()->random()->id
        ];
    }
}
