<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bike;
use App\Models\Station;

class BikeSeeder extends Seeder
{
    public function run(): void
    {
        $stationIds = Station::pluck('id')->all();

        // 15 tradicionales
        for ($i = 1; $i <= 15; $i++) {
            Bike::updateOrCreate(
                ['codigo' => sprintf('EB-T-%04d', $i)],
                [
                    'tipo' => 'tradicional',
                    'estado' => 'disponible',
                    'station_id' => $stationIds[array_rand($stationIds)],
                ]
            );
        }

        // 5 eléctricas
        for ($i = 1; $i <= 5; $i++) {
            Bike::updateOrCreate(
                ['codigo' => sprintf('EB-E-%04d', $i)],
                [
                    'tipo' => 'electrica',
                    'estado' => 'disponible',
                    'station_id' => $stationIds[array_rand($stationIds)],
                ]
            );
        }
    }
}
