<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memotest extends Model {

    use HasFactory;

    protected $table = 'memotests';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'deleted',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted' => 'boolean',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }
}
