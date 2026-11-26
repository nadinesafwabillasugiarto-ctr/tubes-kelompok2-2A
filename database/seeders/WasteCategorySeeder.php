<?php

namespace Database\Seeders;

use App\Models\WasteCategory;
use Illuminate\Database\Seeder;

class WasteCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Botol Plastik PET Bening',
                'description' => 'Botol air mineral bersih tanpa label dan tutup terpisah.',
                'points_per_kg' => 50,
            ],
            [
                'name' => 'Kardus & Karton Kering',
                'description' => 'Kardus bekas kemasan dalam kondisi kering dan dilipat rapi.',
                'points_per_kg' => 30,
            ],
            [
                'name' => 'Kaleng Aluminium',
                'description' => 'Kaleng minuman ringan berbahan aluminium bersih.',
                'points_per_kg' => 120,
            ],
            [
                'name' => 'Kertas HVS & Buku Bekas',
                'description' => 'Kertas putih bekas cetak atau buku tulis tanpa sampul plastik.',
                'points_per_kg' => 35,
            ],
            [
                'name' => 'Botol Kaca Bening',
                'description' => 'Botol kaca utuh dalam kondisi bersih.',
                'points_per_kg' => 25,
            ],
        ];

        foreach ($categories as $category) {
            WasteCategory::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}