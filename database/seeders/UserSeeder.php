<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
       User::create([
        'first_name' => 'nour',
        'last_name' => 'mohamed',
        'email' => 'nour@gmail.com',
        'phone' => '123654789511',
        'password' => Hash::make('12345678'),
       ]);

       DB::table('users')->insert([
        'first_name' => 'Str::random(10)',
        'last_name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'password' => Hash::make('password'),
        'phone' => '1236547895555',
    ]);
    }
}
