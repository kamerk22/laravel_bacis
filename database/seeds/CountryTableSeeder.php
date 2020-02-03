<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryToInsert = ['India', 'Canada', 'China'];
        foreach ($countryToInsert as $c) {
            Country::create([
                'name' => $c
            ]);
        }
    }
}
