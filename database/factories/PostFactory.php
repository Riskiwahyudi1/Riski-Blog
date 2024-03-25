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
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'user_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(11, 16),
            'excerpt' => $this->faker->sentence(mt_rand(4, 8)),
            'body' => '<p>' . implode('<p></p>',$this->faker->paragraphs(mt_rand(6, 12))),
        ];
    }
}
