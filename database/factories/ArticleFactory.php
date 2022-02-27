<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(rand(20, 35)),
            'text' => $this->faker->realText(rand(200, 300)),
            'slug' => $this->faker->slug,
            'likes' => 0,
            'views' => 0,
            'created_at' => $this->faker->dateTimeBetween('-60 days', '-30 days'),
            'updated_at' => $this->faker->dateTimeBetween('-20 days', '-1 days'),
        ];
    }
}

