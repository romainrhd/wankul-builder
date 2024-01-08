<?php

namespace Database\Seeders;

use App\Models\Illustrator;
use Illuminate\Database\Seeder;

class IllustratorsSeeder extends Seeder
{
    private const ILLUSTRATORS = [
        'Léonard Lam',
        'Ben Gilletti',
        'Jaycee',
        'Yuriiick',
        'Lhothus',
        'Mael Lohbrunner',
        '0 Redge',
        'KaroArt',
        'Camille Soulier',
        'Paul Camilli',
        'Franck Sabatier',
        'B Roca',
        'Theomiel',
        'Arche de Noé Timo Claeys',
        'Dr Zebi',
        'Maassi',
        'Mesh',
        'LeilaEtcetera',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::ILLUSTRATORS as $illustrator) {
            Illustrator::create([
                'name' => $illustrator,
            ]);
        }
    }
}
