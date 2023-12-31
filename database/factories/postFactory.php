<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(mt_rand(3,10)),
            "user_id"=> mt_rand(1,3),
            "category_id"=> mt_rand(1,2),
            "slug"=> $this->faker->slug(),
            "excerpt"=> $this->faker->sentence(mt_rand(10,25)),
            "body"=> $this->faker->paragraph(mt_rand(5,7))
        ];
    }
}
