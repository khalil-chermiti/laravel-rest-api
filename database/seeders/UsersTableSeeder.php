<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();

        // creating a hash password
        $password = Hash::make('soussou');
        // $password = bcrypt('secret');
        
        // create admin 
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => $password,
        ]);

        // create 10 fake users
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
