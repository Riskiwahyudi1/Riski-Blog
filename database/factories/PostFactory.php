<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'user_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,2),
            'slug' => $this->faker->sentence(1),
            'excerpt' => $this->faker->sentence(mt_rand(8, 21)),
            'body' => $this->faker->paragraph(10),
        ];
    }
}
