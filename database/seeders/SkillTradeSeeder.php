<?php

namespace Database\Seeders;

use App\Models\SkillTrade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillTradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillTrade::factory()->count(20)->create();
    }
}
