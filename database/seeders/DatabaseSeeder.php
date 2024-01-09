<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $posts = Post::factory(200)
            ->has(Comment::factory(15)->recycle($users))
            ->recycle($users)
            ->create();

        // Define a specified user
        $jeffrey = User::factory()
            ->has(Post::factory(45)
                ->has(Comment::factory(12)->recycle($posts)))
            ->create([
                'name' => 'Jeffrey',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
            ]);
    }
}
