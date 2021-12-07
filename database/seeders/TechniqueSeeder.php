<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technique;

class TechniqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technique::factory(100)->create();
    }
}

