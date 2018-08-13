<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_superadmin = Role::where('name', 'superadmin')->first();
        $role_manager = Role::where('name', 'manager')->first();

        $user = new User();
        $user->first_name = "Bob";
        $user->last_name = "Sinkler";
        $user->email = "bob@mail.com";
        $user->password = bcrypt('hellobob');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->first_name = "Admin";
        $admin->last_name = "Admin";
        $admin->email = "admintest@mail.com";
        $admin->password = bcrypt('helloadmin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $superadmin = new User();
        $superadmin->first_name = "Superadmin";
        $superadmin->last_name = "Superadmin";
        $superadmin->email = "superadmintest@mail.com";
        $superadmin->password = bcrypt('hellosuperadmin');
        $superadmin->save();
        $superadmin->roles()->attach($role_superadmin);

        $manager = new User();
        $manager->first_name = "Manager";
        $manager->last_name = "Manager";
        $manager->email = "managertest@mail.com";
        $manager->password = bcrypt('hellomanager');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
