<?php

namespace Database\Seeders;

use App\Models\IncidentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class IncidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IncidentType::create(['name'=> 'Robbery']);
        IncidentType::create(['name'=> 'Street fight']);
        IncidentType::create(['name'=> 'Car accident']);
        IncidentType::create(['name'=> 'Injury']);
        IncidentType::create(['name'=> 'Property damage']);
        IncidentType::create(['name'=> 'Fire accident']);
        IncidentType::create(['name'=> 'Marites']);
    }
}
