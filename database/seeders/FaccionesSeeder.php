<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cat\Facciones;

class FaccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // datos
        $rows = [
            [
                'nombre' => 'Alianza',
                'descripcion' => 'La Alianza (también conocida como Gran Alianza) es una de las dos facciones políticas más numerosa de las razas de Azeroth, en contrapartida a la Horda. La Alianza abarca una gran cantidad de poderosas culturas y grupos unidas no por la desesperación o la necesidad, sino por un profundo compromiso con conceptos abstractos como la nobleza y la justicia, y tratando de representar a estos altos ideales, pese a su diversidad de pueblos, todos contribuyen con su sabiduría técnica, arca y espiritual hacia el objetivo de un mundo justo y en paz. La lealtad y el idealismo de la Alianza de Lordaeron fueron una inspiración para la nueva Alianza de hoy en día. La actual organización tiene el grueso de sus fuerzas en el norte de Kalimdor y el sur de los Reinos del Este (Khaz Modan y Azeroth. Algunos de los antiguos miembros de la anterior Alianza son miembros de la actual Gran Alianza.',
            ],
            [
                'nombre' => 'Horda',
                'descripcion' => 'La Horda es una de las dos facciones políticas más numerosa de las razas de Azeroth, en contrapartida a la Alianza. Es un grupo de supervivientes que han superado toda clase de adversidades, desde mundos destruidos a destierros, pasando por conflictos familiares y relaciones con aliados incómodos. En la Horda, la acción y la fuerza se valoran más que la diplomacia, y sus líderes ganan el respeto con la hoja, sin perder el tiempo con la política. Se centran en la brutalidad de los campeones de la Horda, dando voz a los que luchan por la supervivencia.',
            ],
        ];
        // registrar todos
        foreach ($rows as $row) {
            try {
                Facciones::create($row);
            } catch (PDOException $e) {
                // @ignoreException
            }
        }
    }
}
