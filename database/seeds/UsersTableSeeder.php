<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'           => 'Isrrael Peña Chavez',
                'email'          => 'isrrael@lapaz.bo',
                'password'       => '$2y$10$5uSZQIl.mCyXf/dHUHfC.u0q1VXWTNwFel/9VeS66G4eQRBHXEK1m',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
