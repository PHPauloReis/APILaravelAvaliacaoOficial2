<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'expression' => $this->faker->sentence,
            'description' => $this->faker->text,
            'synonyms' => $this->faker->word,
            'tags' => $this->faker->word,
            'examples' => $this->faker->sentence
        ];
    }
}
