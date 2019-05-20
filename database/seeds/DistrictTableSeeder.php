<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = New \App\District();
        $district->name = 'Kathmandu';
        $district->state_id = 1;
        $district->user_id = 1;
        $district->save();
    }
}
