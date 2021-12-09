<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Technique;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

                'content' => $this->faker->words(20, true),
                'user_id' => User::all()->random()->id,
                'technique_id' => Technique::all()->random()->id,

        ];
    }
}
