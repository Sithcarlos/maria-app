<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Avatares;
class AvataresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // datos
        $rows = [
            [
                'borrar' => false,
                'clase_id' => 8,
                'comentario' => 'el mejor tank de todos',
                'guild_id' => 1,
                'main' => true,
                'nombre' => 'Rosaliz',
                'propietario' => 1,
                'rango' => 'Oficial',
                'raza_id' => 3,
                'uc_modifico' => 1,
            ],
            [
                'borrar' => false,
                'clase_id' => 8,
                'comentario' => 'toy chiquito',
                'guild_id' => 1,
                'main' => false,
                'nombre' => 'CarlosDon',
                'propietario' => 1,
                'rango' => 'Oficial',
                'raza_id' => 3,
                'uc_modifico' => 1,
            ],
            [
                'borrar' => false,
                'clase_id' => 2,
                'comentario' => 'con agonia',
                'guild_id' => 1,
                'main' => false,
                'nombre' => 'SithCarlos',
                'propietario' => 1,
                'rango' => 'Oficial',
                'raza_id' => 3,
                'uc_modifico' => 1,
            ],
            [
                'borrar' => false,
                'clase_id' => 3,
                'comentario' => 'vaca gorda',
                'guild_id' => 1,
                'main' => false,
                'nombre' => 'Centaurox',
                'propietario' => 2,
                'rango' => 'GM',
                'raza_id' => 9,
                'uc_modifico' => null,
            ],
        ];
        // registrar todos
        foreach ($rows as $row) {
            try {
                Avatares::create($row);
            } catch (PDOException $e) {
                // @ignoreException
            }
        }


    }
}
