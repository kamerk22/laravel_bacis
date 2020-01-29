<?php

use App\Phone;
use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::create([
            'contact' => '+919898987898',
            'user_id' => 1
        ]);

        Phone::create([
            'contact' => '+91989897745',
            'user_id' => 1
        ]);

        Phone::create([
            'contact' => '+91239897745',
            'user_id' => 1
        ]);
    }
}
