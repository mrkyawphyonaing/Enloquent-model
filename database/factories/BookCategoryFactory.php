<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookCategory>
 */
class BookCategoryFactory extends Factory
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
            'book_id'=> \App\Models\Book::factory(),
            'category_id'=> $this->faker->randomElement(\App\Models\Category::pluck('id')->toArray())
        ];
    }
}
