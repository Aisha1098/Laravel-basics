<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        Post::factory(10) -> create();
        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name'=> 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name'=> 'Family',
        //     'slug' => 'Family'
        // ]);

        // $work = Category::create([
        //     'name'=> 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' =>'my-family=post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum sit amet. consectetur adipscing elit. Morbi viverra vehicula misl eget blandit. Mauris hendererit accumsan.'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' =>'my-personal=post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum sit amet. consectetur adipscing elit. Morbi viverra vehicula misl eget blandit. Mauris hendererit accumsan.'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' =>'my-work=post',
        //     'excerpt' => 'Lorem ipsum dolar sit amet.',
        //     'body' => 'Lorem ipsum sit amet. consectetur adipscing elit. Morbi viverra vehicula misl eget blandit. Mauris hendererit accumsan.'
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
