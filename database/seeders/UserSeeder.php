<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Jawil',
                'fname' => 'Leeyhan',
                'username' => 'yhan11',
                'password' => bcrypt('pass'),
                'email' => 'leeyhanjawil@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Yoo',
                'fname' => 'Gong',
                'username' => 'gongyoo11',
                'password' => bcrypt('pass'),
                'email' => 'gongyoo@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],

        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
