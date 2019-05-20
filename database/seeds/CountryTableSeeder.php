<?php

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
        $country = New \App\Country();
        $country->name = 'Nepal';
        $country->user_id = 1;
        $country->save();

    }
}
