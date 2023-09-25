<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $gender = rand(0, 1) ? 'F' : 'M';

        DB ::table('users')->insert([
            'gender' => $gender,
            'name' => ($gender == 'F') ? $faker->firstName('female') : $faker->firstName('male'),
            'last_name' => $faker->lastName,
            'birthday' => $faker->date,
            'email' => $faker->email,
            'number' => random_int(1000000000,9999999999),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
