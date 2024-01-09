<?php

namespace Database\Seeders;

use App\Models\Rarity;
use Illuminate\Database\Seeder;

class RaritiesSeeder extends Seeder
{
    private const array RARITIES = [
        [
            'name' => 'Commune',
            'slug' => 'C',
        ],
        [
            'name' => 'Peu Commune',
            'slug' => 'UC',
        ],
        [
            'name' => 'Rare',
            'slug' => 'R',
        ],
        [
            'name' => 'Terrain',
            'slug' => 'T',
        ],
        [
            'name' => 'Ultra Rare Holo 1',
            'slug' => 'UR1',
        ],
        [
            'name' => 'Ultra Rare Holo 2',
            'slug' => 'UR2',
        ],
        [
            'name' => 'Légendaire Bronze',
            'slug' => 'L-BRONZE',
        ],
        [
            'name' => 'Légendaire Argent',
            'slug' => 'L-ARGENT',
        ],
        [
            'name' => 'Légendaire Or',
            'slug' => 'L-OR',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::RARITIES as $rarity) {
            Rarity::create([
                'name' => $rarity['name'],
                'slug' => $rarity['slug'],
            ]);
        }
    }
}
