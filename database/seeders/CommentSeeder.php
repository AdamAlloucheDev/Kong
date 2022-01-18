<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {

            $token = md5(uniqid(true));

            DB::table('comments')->insert([
                'body' => $faker->paragraph,
                'user_id' => 1,
                'post_id' => 1,
                'likes' => 16
            ]);
            
        }
    }
}
