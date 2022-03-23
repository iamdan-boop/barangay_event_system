<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status_id' => $this->faker->numberBetween(0, 1),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->randomLetter(),
            'last_name' => $this->faker->lastName(),
            'contact' => $this->faker->phoneNumber(),
            'gender' => 'Male',
            'dob' => now(),
            'status' => 'Single',
            'citizenship' => 'Filipino',
            'occupation' => 'Worker',
            'zone' => $this->faker->postcode(),
            'address' => $this->faker->address(),
        ];
    }
}
