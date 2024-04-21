<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $users = User::factory()->count(10)->create(); 
        foreach ($users as $user) {
            Post::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
