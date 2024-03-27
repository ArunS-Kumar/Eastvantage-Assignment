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
        Role::create(['name' => Role::AUTHOR]);
        Role::create(['name' => Role::EDITOR]);
        Role::create(['name' => Role::SUBSCRIBER]);
        Role::create(['name' => Role::ADMINISTRATOR]);
    }
}
