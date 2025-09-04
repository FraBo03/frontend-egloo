<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Winehouse;

class WinehouseSeeder extends Seeder
{
    public function run()
    {
        $winehouses = [
            [
                'title' => '3 WINES EXPERIENCE',
                'description' => 'Degustazione di tre vini al Rifugio del Vino e visita alla cantina',
                'cover_image' => 'a.PNG',
                'drink' => true,
                'food' => false,
                'relax' => false,
                'duration' => 60,
                'prices' => [25.00],
            ],
            [
                'title' => '5 WINES EXPERIENCE',
                'description' => 'Degustazione di 5 vini del territorio presso il rifugio dei vini in cantina e barricaia',
                'cover_image' => 'b.PNG',
                'drink' => true,
                'food' => true,
                'relax' => false,
                'duration' => 90,
                'prices' => [34.00],
            ],
            [
                'title' => 'WINE AND CHEESE EXPERIENCE',
                'description' => 'Degustazione di 5 vini selezionati in abbinamento a 6 formaggi locali e visita alla cantina e barricaia',
                'cover_image' => 'c.PNG',
                'drink' => true,
                'food' => true,
                'relax' => false,
                'duration' => 90,
                'prices' => [45.00],
            ],
            [
                'title' => 'TOP WINES EXPERIENCE',
                'description' => 'Degustazione di 5 vini di alta qualità accompagnati da un tagliere della gastronomia locale e visita alla cantina e barricaia',
                'cover_image' => 'd.PNG',
                'drink' => true,
                'food' => true,
                'relax' => false,
                'duration' => 100,
                'prices' => [65.00],
            ],
            [
                'title' => 'CÔTEAU LA TOUR EXPERIENCE',
                'description' => 'Degustazione di 5 vini accompagnati da un tagliere della gastronomia locale e visita in cantina e barricaia. Tour del vigneto di Côteau e brindisi nella torre medievale',
                'cover_image' => 'e.PNG',
                'drink' => true,
                'food' => true,
                'relax' => false,
                'duration' => 120,
                'prices' => [75.00],
            ],
            [
                'title' => 'WINEMAKER’S EXPERIENCE',
                'description' => 'Scopri il mondo, raccontato dal nostro enologo Raffaele, dai vigneti alla cantina',
                'cover_image' => 'f.PNG',
                'drink' => true,
                'food' => true,
                'relax' => false,
                'duration' => 100,
                'prices' => [90.00],
            ],
            [
                'title' => 'CÔTEAU LA TOUR EXPERIENCE',
                'description' => 'Degustazione di 5 vini accompagnati da un tagliere della gastronomia locale e visita in cantina e barricaia. Tour del vigneto di Côteau e brindisi nella torre medievale',
                'cover_image' => 'g.PNG',
                'drink' => true,
                'food' => true,
                'relax' => true,
                'duration' => 90,
                'prices' => [346.00, 380.00], // aggiunto prezzo extra
            ],
        ];

        foreach ($winehouses as $data) {
            $prices = $data['prices'];
            unset($data['prices']); // rimuove l'array dei prezzi prima del create

            $winehouse = Winehouse::create($data);

            foreach ($prices as $price) {
                $winehouse->prices()->create(['price' => $price]);
            }
        }
    }
}
