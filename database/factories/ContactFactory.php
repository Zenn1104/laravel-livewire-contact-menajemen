<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::pluck('id')), 
            'name' => fake()->name(),
            'phone' => fake()->e164PhoneNumber(),
            'email'=> fake()->unique()->safeEmail(), 
            'address' => fake()->address()
        ];
    }
}