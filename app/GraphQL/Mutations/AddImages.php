<?php

namespace App\GraphQL\Mutations;

use App\Models\Image;

final class AddImages {

    public function __invoke($_, array $args) {
        
        $insertedIds = [];
        foreach ($args['images'] as $imageData) {
            $image = new Image();
            $image->url = $imageData['url'];
            $image->memotest_id = $args['memotest_id'];
            $image->save();
            $insertedIds[] = $image->id;
        }
        
        $filtered = Image::whereIn('id', $insertedIds)->get();
        return $filtered->toArray();

    }
}
