<?php

use App\License;
use Illuminate\Database\Seeder;

class LicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        License::create([
            'number' => '115454646046',
            'user_id' => 1
        ]);
    }
}
