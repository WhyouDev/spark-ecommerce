<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name             = "admin";
        $user->password         = bcrypt("admin");
        $user->email            = "admin@mail.com";
        $user->save();

        $user->assignRole('admin');
    }
}
