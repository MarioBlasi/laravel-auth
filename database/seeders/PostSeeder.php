<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            Post::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'status' => $faker->randomElement(['pending', 'ongoing', 'completed']),
                'password' => $faker->password(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

