<?php

use App\Models\Memotest;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemotestFactory extends Factory
{
    protected $model = Memotest::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'deleted' => false
        ];
    }
}

