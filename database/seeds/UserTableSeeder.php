<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'role_id' => '1',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('000'),
        ]);

    }
}
