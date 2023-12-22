<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Avatares>
 */
class AvataresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'borrar' => $this->faker->boolean,
            'clase_id' => $this->faker->randomDigitNot(0),
            'comentario' => $this->faker->text(),
            'guild_id' => 2,
            'main' => $this->faker->boolean,
            'nombre' => $this->faker->name(),
            'propietario' => $this->faker->randomDigitNot(0),
            'rango' => $this->faker->randomAscii(),
            'raza_id' => $this->faker->randomDigitNot(0),
            'uc_modifico' => $this->faker->randomDigitNot(0),
        ];
    }
}
