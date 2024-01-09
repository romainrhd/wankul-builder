<?php

namespace Database\Seeders;

use App\Models\Expansion;
use Illuminate\Database\Seeder;

class ExpansionsSeeder extends Seeder
{
    private const array EXPANSIONS = [
        'Origins', 'Campus', 'Hors Série',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::EXPANSIONS as $expansion) {
            Expansion::create([
                'name' => $expansion,
            ]);
        }
    }
}
