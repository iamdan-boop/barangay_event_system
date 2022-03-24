<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaxPayment>
 */
class TaxPaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => $this->faker->name,
            'payor' => Citizen::inRandomOrder()->first()->id,
            'fund' => $this->faker->name,
            'payment_method' => 'GCASH',
            'drawee_bank' => $this->faker->name,
            'drawee_bank_number' => Str::random(),
            'drawee_bank_date' => $this->faker->date,
        ];
    }
}
