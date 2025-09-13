<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    public function run(): void
    {
        $stations = [
            ['nombre' => 'Malecón',        'tipo' => 'seleccion', 'lat' => 15.7275, 'lng' => -88.5933, 'capacidad' => 12],
            ['nombre' => 'Parque Central', 'tipo' => 'descanso',  'lat' => 15.7279, 'lng' => -88.5948, 'capacidad' => 10],
            ['nombre' => 'Puerto',         'tipo' => 'carga',     'lat' => 15.7159, 'lng' => -88.6024, 'capacidad' => 8],
            ['nombre' => 'Mercado',        'tipo' => 'seleccion', 'lat' => 15.7252, 'lng' => -88.6001, 'capacidad' => 10],
            ['nombre' => 'Hospital',       'tipo' => 'carga',     'lat' => 15.7310, 'lng' => -88.5915, 'capacidad' => 8],
        ];

        foreach ($stations as $s) {
            Station::updateOrCreate(['nombre' => $s['nombre']], $s);
        }
    }
}
