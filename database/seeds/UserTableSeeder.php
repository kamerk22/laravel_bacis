<?php

use App\User;
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
        User::create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@user.com',
            'country_id' => 1,
            'password' => bcrypt('password')
        ]);


        User::create([
            'id' => 2,
            'name' => 'Test User 2',
            'email' => 'test2@user.com',
            'country_id' => 2,
            'password' => bcrypt('password')
        ]);


        User::create([
            'id' => 3,
            'name' => 'Test User 3',
            'email' => 'test3@user.com',
            'country_id' => 3,
            'password' => bcrypt('password')
        ]);
    }
}
