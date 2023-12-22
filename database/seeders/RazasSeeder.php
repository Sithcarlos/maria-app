<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cat\Razas;

class RazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // datos
        $rows = [
            [
                'nombre' => 'Draenei',
                'descripcion' => 'Habilidad en joyería aumentada. Puede sanar a otros durante un tiempo. Probabilidad de los miembros del grupode golpear con ataques cuerpo a cuerpo y hechizos aumentada. Resistente a las sombras.',
                'facciones_id' => 1,
            ],
            [
                'nombre' => 'Elfo de la noche',
                'descripcion' => 'Puede desaparecer en las sombras. Más dificil de alcanzar. Forma de fuego fatuo al morir para adquirir rapidez de movimiento. Resistente al daño de Naturaleza.',
                'facciones_id' => 1,
            ],
            [
                'nombre' => 'Elfo de sangre',
                'descripcion' => 'Habilidad en encantar aumentada. Puede restaurar maná, energia o poder rúnico. Puede silenciar a los oponentes cercanos. Resistente al daño mágico.',
                'facciones_id' => 2,
            ],
            [
                'nombre' => 'Enano',
                'descripcion' => 'Puede adoptar la consistencia de una piedra. Probabilidad de golpe crítico con armas de fuego aumentada. Resistente a la escarcha. Puede escapar de efectos que alteran la velocidad y escapar de trampas. Pericia con mazas aumentada.',
                'facciones_id' => 1,
            ],
            [
                'nombre' => 'Gnomo',
                'descripcion' => 'Puede escapar de los efectos que alteran la velocidad. Intelecto aumentado. Resistencia al daño Arcano. Habilidad en Ingenieria aumentada.',
                'facciones_id' => 1,
            ],
            [
                'nombre' => 'Humano',
                'descripcion' => 'Detección de sigilo aumentada. Espiritu aumentado. Bonus de obtención de reputación. Pericia con espadas y mazas aumentada. Puede escapar de efectos que alteran la velocidad y escapar de trampas.',
                'facciones_id' => 1,
            ],
            [
                'nombre' => 'No muerto',
                'descripcion' => 'Puede eliminar miedo, sueño y embelasamiento. Puede consumir cadaveres para recuperar salud. Respiración bajo el agua aumentada. Resistente al daño de sombras.',
                'facciones_id' => 2,
            ],
            [
                'nombre' => 'Orco',
                'descripcion' => 'Puede enfurecer para aumentar el daño. Resistencia a los efectos de aturdimiento. Daño infligido con mascotas aumentado. Pericia con hachas y armas de puños aumentadas.',
                'facciones_id' => 2,
            ],

            [
                'nombre' => 'Tauren',
                'descripcion' => 'Puede dar un pisotón que aurte a los enemigos cercanos. Salud máxima aumentada. Habilidad en herboristería aumentada. Resistente al daño de Naturaleza.',
                'facciones_id' => 2,
            ],
            [
                'nombre' => 'Troll',
                'descripcion' => 'Su rabia aumenta la rapidez de ataques y hechizos. Regeneración aumentada. Daño infligido contra bestias aumentado. Probabilidad de golpe crítico con armas arrojadizas y arcos aumentada. Duración reducida de los efectos que reducen el movimiento.',
                'facciones_id' => 2,
            ],
        ];
        // registrar todos
        foreach ($rows as $row) {
            try {
                Razas::create($row);
            } catch (PDOException $e) {
                // @ignoreException
            }
        }
    }
}
