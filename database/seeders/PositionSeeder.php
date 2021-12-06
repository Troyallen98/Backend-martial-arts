<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class position extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
    }
}
