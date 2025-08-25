<?php

namespace Database\Factories;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SkillTrade>
 */
class SkillTradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(['Accepted', 'Pending', 'Rejected']),
            'learner_id' => User::inRandomOrder()->first()->id,
            'skill_id' => Skill::inRandomOrder()->first()->id,
        ];
    }
}
