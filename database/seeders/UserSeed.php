<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Super Admin',
                'email' => 'remaxadmin@gmail.com',
                'password' => Hash::make('Remax@221'),
                'email_verified_at' => '2022-07-21 08:42:53',
            ]
        );
        $user->assignRole('admin');
    }
}
