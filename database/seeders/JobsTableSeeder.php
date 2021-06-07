<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;


class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $ran = array('Queued','Processing','Complete');
        $v = array_rand($ran);
        $stt = $ran[$v];


        foreach (range(1, 10) as $i) {
            DB::table('jobs')->insert([
                'user_id' => rand(1,10),
                'title'     =>  $faker->sentence,
                'status'     =>  $stt
            ]);
        }
    }
}
