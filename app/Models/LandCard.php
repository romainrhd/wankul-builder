<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'winner_effect',
        'loser_effect',
        'special_effect',
        'card_id',
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
