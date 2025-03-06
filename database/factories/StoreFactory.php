<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->name(),
            'address_1' => $this->faker->address(),
            'address_2' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->country(),
            'country' => $this->faker->country(),
            'zip' => $this->faker->postcode(),
            'gstin' => 'GST-'.$this->faker->postcode(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'alternate_phone' => $this->faker->phoneNumber(),
        ];
    }
}
