<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::inRandomOrder()->first();
        return [
            'category_id' => $category->id,
            'name' =>fake()->streetName(),
            'description' => fake()->paragraph(rand(3, 5)),
            'stock' => fake()->randomNumber(2),
            'viewed' => fake()->randomNumber(2),
        ];
    }
}
