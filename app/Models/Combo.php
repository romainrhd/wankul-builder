<?php

namespace App\Models;

use App\Enums\PositionCombo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Combo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
    ];

    protected $casts = [
        'position' => PositionCombo::class,
    ];

    public function cards(): BelongsToMany
    {
        return $this->belongsToMany(Card::class);
    }
}
