<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Event;
use App\Models\Car;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()
        //     ->count(50)
        //     ->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Post::factory()
        //     ->count(50)
        //     ->create();

        // Comment::factory()
        //     ->count(50)
        //     ->create();

        // Event::factory()
        //     ->count(50)
        //     ->create();

        Car::factory()
            ->count(50)
            ->create();
    }
}
