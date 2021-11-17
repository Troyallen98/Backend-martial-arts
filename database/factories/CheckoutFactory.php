<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\User;
use DateTime;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => Book::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'check_out' => $this->faker->dateTime($max = '-5 months', $timezone = null),
            'check_in' => $this->faker->dateTimeBetween($startDate = '-5 months', $endDate = 'now', $timezone = null)
        ];
    }
}
