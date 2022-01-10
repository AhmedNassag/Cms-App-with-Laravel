<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where('email', 'ahmednassag@gmail.com')->first();

        if (!$user)
        {
            User::create
            ([
                'name'     => 'Ahmednassag',
                'email'    => 'ahmednassag@gmail.com',
                'password' => Hash::make('0101685643320111993'),
                'role'     => 'admin'
            ]);
        }

    }
}
