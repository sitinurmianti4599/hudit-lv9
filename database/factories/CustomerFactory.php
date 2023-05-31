<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'registration' => $this->faker->unique()->uuid(),
            'photo' => $this->faker->imageUrl(),
            'name' => $this->faker->unique()->userName(),
            'address' => $this->faker->address(),
            'job' => $this->faker->jobTitle(),
            'telp' => $this->faker->unique()->phoneNumber(),
            'progress' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['progress', 'done']),
            'order_date' => $this->faker->date(),
            'done_date' => null,
            'service_id' => 0,
            'service_type_id' => 0,
        ];
    }
}
