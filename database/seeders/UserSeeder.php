<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->create([
            'name'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('user1')
        ]);
        $user->create([
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>Hash::make('user2')
        ]);
    }
}
