<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CharacterCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'cost',
        'power',
        'effect_text',
        'story_text',
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
