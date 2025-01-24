<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['5,000 DH', '7,200 DH', '6,500 DH', '9,000 DH']),
            'location' => 'Remote',
            'schedule' => 'Full-Time',
            'url' => fake()->url(),
            'vip' => false
        ];
    }
}
