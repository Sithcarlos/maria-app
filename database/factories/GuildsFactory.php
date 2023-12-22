<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guilds>
 */
class GuildsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'activa' => true,
            'borrar' => false,
            'dc' => 'servidor de dc',
            'gm' => 3,
            'informacion' => $this->faker->randomLetter(),
            'mensaje' => $this->faker->randomLetter(),
            'nombre' => $this->faker->company(),
            'tg' => $this->faker->url(),
            'uc_modifico' => 1,
            'wh' => $this->faker->randomAscii(),
        ];
    }
}
