<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\checkout;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checkout::factory(10)->create();
    }
}
