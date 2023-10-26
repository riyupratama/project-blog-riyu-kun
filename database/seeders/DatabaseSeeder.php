<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // $faker = Faker::create('id, ID');

        // DB::table('posts')->insert([
        //     'id' => Int::random(10),
        //     'image' => $faker->image()->size(200),
        //     'title' => $faker->title,
        //     'content' => Str::random(500),
        // ]);
    }
}
