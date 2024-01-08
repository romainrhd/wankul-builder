<?php

namespace Database\Seeders;

use App\Models\Rarety;
use Illuminate\Database\Seeder;

class RaretiesSeeder extends Seeder
{
    private const RARETIES = [
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
        foreach (self::RARETIES as $rarety) {
            Rarety::create([
                'name' => $rarety['name'],
                'slug' => $rarety['slug'],
            ]);
        }
    }
}
