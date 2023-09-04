<?php

namespace App\GraphQL\Queries;

use App\Models\Memotest;

final class Memotests {

    public function __invoke(){

        $memotests = Memotest::with('images')->get();

        return $memotests->map(function ($memotest) {
            return [
                'id' => $memotest->id,
                'name' => $memotest->name,
                'images' => $memotest->images->toArray(),
            ];
        });

    }
}
