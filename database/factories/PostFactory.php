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
        $category = ['PHP','JAVASCRIPT','HTML','CSS','LARAVEL'];
        $arr_rand = array_rand($category, 1);
        return [
            //
            "image" => fake()->image('public/storage/posts',1000,556, 'technology', false),
            "title" => fake()->sentence,
            "slug" => Str::slug(fake()->sentence),
            "category" => $category[$arr_rand],
            "content" => fake()->paragraphs(10, true),
            "user_id" => mt_rand(1, 2)
        ];
    }
}
