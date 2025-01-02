<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => '/uploads/image.png',
            'name' => $this->faker->name(),
            'grade' => $this->faker->numberBetween(6, 10),
            'school_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
