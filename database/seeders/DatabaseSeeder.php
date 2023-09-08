<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        \App\Models\Memotest::factory(2)->create();
        \App\Models\Image::factory(8)->create();
    }
}
