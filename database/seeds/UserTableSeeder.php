<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user           = new User();
        $user->email    = 'admin@admin.com';
        $user->name     = 'Administrator';
        $user->password = Hash::make('admin');
        $user->save();
    }
}
