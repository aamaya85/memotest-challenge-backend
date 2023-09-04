<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Memotest;

class GameSessionFactory extends Factory {

    public function definition() {

        $memotestID = Memotest::inRandomOrder()->first()->id;

        return [
            'memotest_id' => $memotestID,
            'retries' => 0,
            'number_of_pairs' => $this->faker->numberBetween($min = 1, $max = 5),
            'state' => $this->faker->randomElement(['Started', 'Completed'])
        ];
    }
}
