<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = New \App\State();
        $state->name = 'State-1';
        $state->country_id = 1;
        $state->user_id = 1;
        $state->save();
    }
}
