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
            'password'=>Hash::make('user1'),
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS47ASN-MW8K-nV9Ck_UZmUFmPF-vRavR5zOA&usqp=CAU'
        ]);
        $user->create([
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>Hash::make('user2'),
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAL1JT6g2AXAX4hPYHVOanA4HLwnOIwyplIg&usqp=CAU'
        ]);
    }
}
