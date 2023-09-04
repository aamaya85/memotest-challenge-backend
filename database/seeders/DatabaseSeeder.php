<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        \App\Models\Memotest::factory(10)->create();
        \App\Models\GameSession::factory(4)->create();
        \App\Models\Image::factory(5)->create();
    }
}
