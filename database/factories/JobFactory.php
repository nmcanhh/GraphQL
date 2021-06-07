<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $ran = array('Queued','Processing','Complete');
        $v = array_rand($ran);
        $stt = $ran[$v];

        return [
            'user_id' => rand(1,20),
            'title' => $this->faker->sentence,
            'status' => $stt
        ];
    }
}
