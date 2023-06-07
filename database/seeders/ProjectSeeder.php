<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            Project::create([
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
