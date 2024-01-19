<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this -> faker -> name(),
            'lastName' => $this -> faker -> lastName(),
            'phone' => $this -> faker -> phoneNumber(),
            'address' => $this -> faker -> address()
        ];
    }
}
