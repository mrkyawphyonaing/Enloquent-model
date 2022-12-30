<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdditionalBookinfo>
 */
class AdditionalBookinfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_id' =>Book::factory(),
            'page' =>$this->faker->numberBetween(1,1000),
            'weight' =>$this->faker->numberBetween(100,1000),
            'language' =>$this->faker->languageCode,
        ];
    }
}
