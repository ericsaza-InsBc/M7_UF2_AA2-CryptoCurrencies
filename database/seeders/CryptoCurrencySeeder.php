<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CryptoCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $apiKey = config('services.coinmarketcap.api_key');
        $endpoint = config('services.coinmarketcap.base_uri') . 'cryptocurrency/listings/latest';

        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => $apiKey,
            'Accepts' => 'application/json',             // Añadido el header Accept
        ])->get($endpoint);

        if ($response->successful()) {
            $cryptocurrencies = $response->json('data');

            foreach ($cryptocurrencies as $crypto) {
                DB::table('cryptocurrencies')->insert([
                    'external_id' => $crypto['id'],
                    'name' => $crypto['name'],
                    'symbol' => $crypto['symbol'],
                    'slug' => $crypto['slug'],
                    'description' => $crypto['description'] ?? null,
                    'logo' => $crypto['logo'],
                    'urls' => json_encode($crypto['urls']),
                    'date_added' => date('Y-m-d', strtotime($crypto['date_added'])),
                    'date_launched' => date('Y-m-d', strtotime($crypto['date_launched'])),
                    'tags' => json_encode($crypto['tags']),
                    'platform' => $crypto['platform'],
                    'category' => $crypto['category'],
                    'infinite_supply' => isset($crypto['infinite_supply']) && $crypto['infinite_supply'],
                ]);
            }
        } else {
            // Puedes agregar manejo de errores aquí si la respuesta no es exitosa
            // Por ejemplo, loguear la respuesta de error
            Log::error('Error fetching cryptocurrencies: ' . $response->body());
        }
    }
}
