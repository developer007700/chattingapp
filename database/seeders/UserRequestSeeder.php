<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chatbtuser;
use App\Models\User;

class UserRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newrequest = new Chatbtuser();  
        $users = User::all();      
        $newrequest->create([
            'user_id'=>$users[0]->id,
            'reciver_id'=>$users[1]->id
        ]);

        $newrequest->create([
            'user_id'=>$users[1]->id,
            'reciver_id'=>$users[0]->id
        ]);
    }
}
