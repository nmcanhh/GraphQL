<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'name' =>'Nguyễn Minh Cảnh',
//            'username' =>'nmcanhh',
            'email' =>'nmcanhh@gmail.com',
            'password' =>bcrypt('mcanhh@gmail.com'),
        ]);

        foreach (range(1, 10) as $i) {
            DB::table('users')->insert([
                'name' =>$faker->name,
//                'username' =>$faker->username,
                'email' =>$faker->email,
                'password' =>bcrypt('mcanhh@gmail.com'),
            ]);
        }
    }
}
