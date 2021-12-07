<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = ['Mount', 'Side Control', 'Back Mount', 'Guard', 'Takedowns'];
        for ($i = 0; $i < count($positions); $i++) {
            $position = new Position();
            $position->name = $positions[$i];
            $position->save();
        }
    }
}
