<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory {

    public function definition() {
        return [
            'url' => $this->faker->imageUrl(),
            'memotest_id' => null
        ];
    }
}
