<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WasteCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'points_per_kg',
    ];

    protected function casts(): array
    {
        return [
            'points_per_kg' => 'integer',
        ];
    }

    public function deposits(): HasMany
    {
        return $this->hasMany(Deposit::class);
    }
}