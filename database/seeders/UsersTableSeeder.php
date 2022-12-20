<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'marketing@dku.id',
                'password'       => bcrypt('Mekikau19'),
                'remember_token' => null,
                'locale'         => '',
            ],
        ];

        User::insert($users);
    }
}