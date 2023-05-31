<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
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
            'name' => $this->faker->unique()->userName(),
            'fullname' => $this->faker->name(),
            'telp' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'email_verified_at' => now(),
            'address' => $this->faker->address(),
            'date_of_birth' => $this->faker->date(),
            'password' => "password",
            'remember_token' => Str::random(10),

            'role_id' => 0,
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
