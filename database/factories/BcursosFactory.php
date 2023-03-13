<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bcursos>
 */
class BcursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'portada' => $this->faker->word(),
            'contenido' => $this->faker->text(),
            'kitRobotica' => $this->faker->sentence(),
        ];
    }
}
