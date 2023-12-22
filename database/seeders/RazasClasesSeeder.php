<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rel\RazasClases;

class RazasClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // datos
        $rows = [
            [
                'razas_id' => 1,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 4,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 8,
            ],
            [
                'razas_id' => 1,
                'clases_id' => 10,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 5,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 2,
                'clases_id' => 10,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 1,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 8,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 3,
                'clases_id' => 10,
            ],

            [
                'razas_id' => 4,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 4,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 4,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 4,
                'clases_id' => 8,
            ],
            [
                'razas_id' => 4,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 4,
                'clases_id' => 10,
            ],

            [
                'razas_id' => 5,
                'clases_id' => 1,
            ],
            [
                'razas_id' => 5,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 5,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 5,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 5,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 1,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 8,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 6,
                'clases_id' => 10,
            ],

            [
                'razas_id' => 7,
                'clases_id' => 1,
            ],
            [
                'razas_id' => 7,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 7,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 7,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 7,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 7,
                'clases_id' => 10,
            ],

            [
                'razas_id' => 8,
                'clases_id' => 1,
            ],
            [
                'razas_id' => 8,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 8,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 8,
                'clases_id' => 4,
            ],
            [
                'razas_id' => 8,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 8,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 9,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 9,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 9,
                'clases_id' => 4,
            ],
            [
                'razas_id' => 9,
                'clases_id' => 5,
            ],
            [
                'razas_id' => 9,
                'clases_id' => 6,
            ],

            [
                'razas_id' => 10,
                'clases_id' => 2,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 3,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 4,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 6,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 7,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 9,
            ],
            [
                'razas_id' => 10,
                'clases_id' => 10,
            ],
        ];
        // registrar todos
        foreach ($rows as $row) {
            try {
                RazasClases::create($row);
            } catch (PDOException $e) {
                // @ignoreException
            }
        }

    }
}
