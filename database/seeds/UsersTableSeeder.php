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
        $role = [
            ['title' => 'Administrator', 'role' => 'admin', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['title' => 'User', 'role' => 'user', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ];

        App\Models\Role::insert($role);

        $user = [
            ['role_id' => 1, 'name' => 'Admin', 'username' => 'admin', 'email' => 'admin@mail.com', 'password' => bcrypt('password'),  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['role_id' => 2, 'name' => 'User', 'username' => 'user', 'email' => 'user@mail.com', 'password' => bcrypt('password'),  'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ];

        App\Models\User::insert($user);

    }
}
