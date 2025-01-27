<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name"=> "User Admin",
            "email"=> "admin@dev.com",
            "email_verified_at" => now(),
            "password"=> bcrypt("8509"),
            "remember_token"=> Str::random(10)
        ]);
    }
}
