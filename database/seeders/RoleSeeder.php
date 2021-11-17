<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'librarian',
            'card_holder'
        ];
        for ($i = 0; $i < count($roles); $i++) {
            $role = new Role;
            $role->title = $roles[$i];
            $role->save();
        }
    }
}
