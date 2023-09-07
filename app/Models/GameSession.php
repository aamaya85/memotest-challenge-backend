<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GameSession extends Model {
    use HasFactory;

    protected $table = 'game_sessions';

    protected $fillable = [
        'retries', 'number_of_pairs', 'state'
    ];

    protected $attributes = [
        'retries' => 0,
        'number_of_pairs' => 0,
        'state' => "STARTED",
    ];

    public function memotest(): BelongsTo{
        return $this->belongsTo(Memotest::class, 'memotest_id');
    }

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted' => 'boolean',
    ];

}
