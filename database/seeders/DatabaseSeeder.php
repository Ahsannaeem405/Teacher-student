<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::Insert([
           'id' => '1',
           'first_name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => bcrypt('12345678'),
           'role' => '1',
           'status' => '1',
        ]);
    }
}
