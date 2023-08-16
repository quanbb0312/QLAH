<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->UserSeeder();
    }

    public function UserSeeder()
    {
        $user = new User();
        $user->name = "test";
        $user->username  = "test123";
        $user->email = "test@gmail.com";
        $user->password = bcrypt(123456);
        $user->photo = 'Screenshot 2023-08-16 102203.png';
        $user->save();
    }
}
