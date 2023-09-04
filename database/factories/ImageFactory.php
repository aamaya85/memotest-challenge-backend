<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Memotest;

class ImageFactory extends Factory {

    public function definition() {
        
        $memotestID = Memotest::inRandomOrder()->first()->id;

        return [
            'url' => $this->faker->imageUrl(400, 300),
            'memotest_id' => $memotestID,
        ];
    }
}
