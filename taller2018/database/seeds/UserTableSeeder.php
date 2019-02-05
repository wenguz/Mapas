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
        $role_user = Role::where('name', 'prop')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Maria';
        $user->email = 'maria@gmail.com';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'admin1';
        $user->email = 'admin1@gmail.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
