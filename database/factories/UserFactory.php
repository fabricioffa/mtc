<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'country' => $this->faker->country(),
            'currency' => $this->faker->currencyCode(),
            'phone' => $this->faker->phoneNumber(),
            'credit_limit' => $this->faker->numberBetween(1000, 9000),
            'state' => $this->faker->boolean(),
            'email_verified_at' => now(),
            'password' => $this->faker->shuffle('-e2or3d9'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
