<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     => 'Slavus',
            'email'    => 'admin@slavus.com',
            'role'    => 'admin',
            'password' => bcrypt('45781221'),
        ]);

        Admin::create([
            'name'     => 'Editor',
            'email'    => 'editor@localhost.com',
            'role'    => 'editor',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name'     => 'Operator',
            'email'    => 'operator@localhost.com',
            'role'    => 'operator',
            'password' => bcrypt('password'),
        ]);
    }
}