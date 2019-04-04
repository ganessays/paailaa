<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_super_admin = new App\Role;
        $role_admin = new App\Role;
        $role_moderator = new App\Role;
        $role_client = new App\Role;
        $role_candidate = new App\Role;

        $role_super_admin->name="SuperAdmin";
        $role_super_admin->save();

        $role_admin->name="Admin";
        $role_admin->save();

        $role_moderator->name="Moderator";
        $role_moderator->save();

        $role_client->name="Client";
        $role_client->save();

        $role_candidate->name="Candidate";
        $role_candidate->save();
    }
}
