<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerVerificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->name(),
            'address' => $this->faker->address(),
            'job' => $this->faker->jobTitle(),
            'telp' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'service_id' => 0,
        ];
    }
}
