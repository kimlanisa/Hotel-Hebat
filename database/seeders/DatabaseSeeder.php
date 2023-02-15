<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('12345678'),
                'roles' => 'ADMIN'
            ],
            [
                'name' => 'Resepsionis',
                'email' => 'resepsionis@gmail.com',
                'password' => \Hash::make('12345678'),
                'roles' => 'RESEPSIONIS'
            ]
        ]);
    }
}
