<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'nasu',
            'name_kanji' => '那須晟士朗',
            'email' => 'nasu@example.com',
            'password' => bcrypt('xxxxxxxx'),
            'groups' => 'A'],
            ['name' => 'kai',
            'name_kanji' => '甲斐敬章',
            'email' => 'kai@example.com',
            'password' => bcrypt('xxxxxxxx'),
            'groups' => 'A'],
            ['name' => 'goto',
            'name_kanji' => '後藤稜弥',
            'email' => 'goto@example.com',
            'password' => bcrypt('xxxxxxxx'),
            'groups' => 'B'],
            ['name' => 'odnoo',
            'name_kanji' => 'オドノー',
            'email' => 'odnoo@example.com',
            'password' => bcrypt('xxxxxxxx'),
            'groups' => 'B']
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
