<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'desc' => fake()->paragraph(),
            'credits' => fake()->numberBetween(1, 50),
            'duration' => fake()->randomFloat(1, 0.5, 5),
            'category_id' => Category::inRandomOrder()->first()->id,
            'teacher_id' => User::inRandomOrder()->first()->id
        ];
    }
}
