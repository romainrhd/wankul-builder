<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name',
        'image',
    ];

    public function characterCard(): HasOne
    {
        return $this->hasOne(CharacterCard::class);
    }

    public function landCard(): HasOne
    {
        return $this->hasOne(LandCard::class);
    }

    public function illustrator(): BelongsTo
    {
        return $this->belongsTo(Illustrator::class);
    }

    public function rarety(): BelongsTo
    {
        return $this->belongsTo(Rarety::class);
    }

    public function expansion(): BelongsTo
    {
        return $this->belongsTo(Expansion::class);
    }

    public function combos(): BelongsToMany
    {
        return $this->belongsToMany(Combo::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('quantity');
    }
}
