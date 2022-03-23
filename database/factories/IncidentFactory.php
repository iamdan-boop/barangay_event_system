<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date_incident' => $this->faker->date,
            'time_incident' => $this->faker->time,
            'location' => $this->faker->address,
            'type_incident' => $this->faker->name,
            'people_involve' => $this->faker->name,
            'details_incident' => $this->faker->sentence,
        ];
    }
}
