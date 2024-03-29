<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id'=>5,
            'title'=>$this->faker->text(50),
            'slug'=>$this->faker->slug(),
            'body'=>$this->faker->paragraph(round(5,20)),
        ];
    }
}
