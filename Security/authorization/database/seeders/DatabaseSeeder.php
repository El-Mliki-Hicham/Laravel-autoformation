<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            "role" => "user",
            "password" => "user1user1",

        ]);
        \App\Models\User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            "role" => "user",
            "password" => "user2user2",

        ]);
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            "role" => "admin",
            "password" => "adminadmin",

        ]);

        $user = User::all();
        \App\Models\Task::factory()->create([
            'Task' => 'tach 1',
            'users_id' =>1 ,
        ]);
        \App\Models\Task::factory()->create([
            'Task' => 'tache 2',
            'users_id' =>2 ,
        ]);
        \App\Models\Task::factory()->create([
            'Task' => 'tach 2',
            'users_id' =>3 ,
        ]);
    }
}
