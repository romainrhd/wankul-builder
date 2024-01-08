<?php

namespace Database\Seeders;

use App\Enums\PositionCombo;
use App\Models\Combo;
use Illuminate\Database\Seeder;

class CombosSeeder extends Seeder
{
    private const COLORS = [
        'Jaune', 'Violet',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (PositionCombo::cases() as $positionCombo) {
            foreach (self::COLORS as $colors) {
                Combo::create([
                    'name' => $colors,
                    'position' => $positionCombo->value,
                ]);
            }
        }
    }
}
