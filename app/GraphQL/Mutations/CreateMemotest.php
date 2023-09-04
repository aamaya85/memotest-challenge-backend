<?php

namespace App\GraphQL\Mutations;

use App\Models\Memotest;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

final class CreateMemotest {

    public function __invoke($_, array $args) {
        
        $memotest = Memotest::create([
            'name' => $args['name']
        ]);

        $imageData = [];
        foreach ($args['images'] as $image) {
            $imageData[] = [
                'url' => $image['url'],
                'memotest_id' => $memotest->id,
            ];
        }

        Image::insert($imageData);
        $memotest = Memotest::with('images')->find($memotest->id);

        return $memotest;

    }
}
