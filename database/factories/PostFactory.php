<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userId = User::inRandomOrder()->first()->id;
        $categoryId = Category::inRandomOrder()->first();

        return [
            'user_id' => $userId,
            'category_id' => $categoryId,
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(5),
            'location' =>fake()->country(),
            'foto' => $this->faker->randomElement([
                'bg-image.jpg',
                'bg-surat.jpg',
            ]),
            'yyl' => fake()->numberBetween(1960, 2025),
        ];
    }
}
