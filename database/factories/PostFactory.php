<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
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
        return [
            //
            "image" => fake()->image('public/storage/posts',640,480, null, false),
            "title" => fake()->sentence,
            "slug" => Str::slug(fake()->sentence),
            "content" => fake()->paragraphs(5, true),
            "user_id" => mt_rand(1, 2)
        ];
    }
}
