<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            ['name'=>'superadmin','email'=>'sadmin@gmail.com','role_id'=>'1','password'=>bcrypt('sadmin123')],
            ['name'=>'admin','email'=>'admin@gmail.com','role_id'=>'2','password'=>bcrypt('admin123')],
            ['name'=>'moderator','email'=>'moderator@gmail.com','role_id'=>'3','password'=>bcrypt('moderator123')],
            ['name'=>'client','email'=>'client@gmail.com','role_id'=>'4','password'=>bcrypt('client123')],
            ['name'=>'candidate','email'=>'candidate@gmail.com','role_id'=>'5','password'=>bcrypt('candidate123')]

        ]);
    }
}
