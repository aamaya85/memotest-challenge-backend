<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Image extends Model {
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'url', "memotest_id"
    ];

    public function memotest(): BelongsTo{
        return $this->belongsTo(Memotest::class);
    }

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted' => 'boolean',
    ];

}
