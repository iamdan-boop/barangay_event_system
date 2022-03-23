<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::create(['name'=> 'barangay_clearance']);
        Certificate::create(['name'=> 'barangay_certificate']);
        Certificate::create(['name'=> 'good_moral_certificate']);
        Certificate::create(['name'=> 'health_certificate']);
        Certificate::create(['name'=> 'indigency_certificate']);
        Certificate::create(['name'=> 'residency_certificate']);
    }
}
