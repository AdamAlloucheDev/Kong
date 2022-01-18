<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $token = md5(uniqid(true));

        DB::table('users')->insert([
            'email' => "adam.allouche97@gmail.com",
            'token' => $token,
            'firstname' => 'Adam',
            'lastname' => 'Allouche',
            'image' => '1.png',
            'password' => Hash::make('Codibanks23')
        ]);

        for ($i = 0; $i < 10; $i++) {

            $token = md5(uniqid(true));

            DB::table('users')->insert([
                'firstname' => $faker->firstname,
                'lastname' => $faker->lastname,
                'email' => $faker->email,
                'bio' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'image' => imageUrl($width = 640, $height = 480),
                'password' => 'Test1',
                'token' => $token
            ]);
            
        }
    }
}
