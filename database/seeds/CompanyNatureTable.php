<?php

use Illuminate\Database\Seeder;

class CompanyNatureTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nature = New \App\CompanyNature();
        $nature->name = 'College';
        $nature->slug = 'college';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'University';
        $nature->slug = 'university';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'Consultancy';
        $nature->slug = 'consultancy';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'Institute';
        $nature->slug = 'institute';
        $nature->save();

        $nature = New \App\CompanyNature();
        $nature->name = 'School';
        $nature->slug = 'school';
        $nature->save();
    }
}
