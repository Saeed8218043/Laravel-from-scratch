<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name'=> Str::random(10)
        ]);

       $user =User::factory()->create([
           'name'=> Str::random(10)
       ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);

    }
}
