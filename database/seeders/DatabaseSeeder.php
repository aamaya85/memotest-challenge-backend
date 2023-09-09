<?php

use App\Models\Memotest;
use App\Models\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {

        $memotests = Memotest::factory(2)->create();

        $urls1 = [
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953685/memotest/images/image04_visp8g.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953685/memotest/images/image03_huz93k.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953685/memotest/images/image02_rfvjfn.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953684/memotest/images/image01_zeeerj.jpg'
        ];

        $urls2 = [
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953689/memotest/images/image15_w1uvbx.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953689/memotest/images/image14_avrc5w.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953688/memotest/images/image13_rjodeg.jpg',
            'https://res.cloudinary.com/dzzlp6dxw/image/upload/v1693953688/memotest/images/image12_xfrunm.jpg'
        ];

        foreach ($urls1 as $url) {
            Image::factory()->create([
                'url' => $url,
                'memotest_id' => $memotests[0]->id
            ]);
        }

        foreach ($urls2 as $url) {
            Image::factory()->create([
                'url' => $url,
                'memotest_id' => $memotests[1]->id
            ]);
        }
    }
}
