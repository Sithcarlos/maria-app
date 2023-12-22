<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cat\Clases;

class ClasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            [
                'nombre' => 'Brujo',
                'descripcion' => 'Función: Daño. Atributos: Intelecto y aguante. Armadura ligera (tela). Invoca demonios como sirvientes. Enfasis en las maldiciones, los drenajes y los hechizos de daño en el tiempo. Puede consumir un fragmento de alma para facultades especiales. Usa maná como recurso.',
            ],
            [
                'nombre' => 'Caballero de la Muerte',
                'descripcion' => 'Función: Daño, tanque. Atributos: Fuerza, aguante e intelecto. Armadura pesada (malla/placas y escudo). Antiguos sirvientes del Rey Exanime. Empieza en el nivel 55. Combina el combate con ataques cuerpo a cuerpo con hechizos , enfermedades y esbirros no muertos. Usa runas como recurso.',
            ],
            [
                'nombre' => 'Cazador',
                'descripcion' => 'Función: Daño. Atributos: Agilidad y aguante / fuerza. Armadura media (cuero/malla). Enfasis en el daño a distancia y las trampas. Obtiene una bestia de tu elección como compañero de por vida. Bueno para subir de nivel e ir solo.',
            ],
            [
                'nombre' => 'Chamán',
                'descripcion' => 'Función: Daño, sanador. Atributos: Fuerza, aguante e intelecto. Armadura media (cuero/malla). Invoca el poder de los cuatro elementos. Usa tótems para mejorar, sanar o hacer daño. Encanta armas con hechizos temporalmente. Usa maná como recurso.',
            ],
            [
                'nombre' => 'Druida',
                'descripcion' => 'Función: Daño, tanque, sanador. Atributos: Agilidad, fuerza / aguante. Armadura media (cuero). Adopta formas animales. Versatil: puede realizar la función de sanador, tanque, cuerpo a cuerpo o taumaturgo. Puede consumir un fragmento de alma para facultades especiales. Usa maná, ira o energia como recurso dependiendo de la forma.',
            ],
            [
                'nombre' => 'Guerrero',
                'descripcion' => 'Función: Daño, tanque. Stats: Aguante y fuerza. Armadura pesada (malla/placas y escudo). Inflige daño con armas cuerpo a cuerpo. Tiene tres actitudes de combate con diferentes beneficios. Usa ira como recurso.',
            ],
            [
                'nombre' => 'Mago',
                'descripcion' => 'Función: Daño. Atributos: Intelecto y aguante. Armadura ligera (tela). Inflige daño con magia de Escarcha, Fuego o Arcana. Puede poliformar enemigos y congelarlos al suelo. Puede teletransportarse a las ciudades e invocar comida y agua. Usa maná como recurso.',
            ],
            [
                'nombre' => 'Paladín',
                'descripcion' => 'Función: Daño, sanador, tanque. Atributos: Aguante y fuerza. Armadura pesada (malla/placas y escudo). Justos vencedores del mal. Inflige daño Sagrado y cuerpo a cuerpo. Tiene una variedad de hechizos defensivos. Usa maná como recurso.',
            ],
            [
                'nombre' => 'Pícaro',
                'descripcion' => 'Función: Daño. Atributos: Agilidad y aguante / fuerza. Armadura media (cuero). Lleva un arma en cada mano. Enfasis en el sigilo, los venenos y el control. Acumula hasta 5 puntos de combo para realizar un remate. Usa energia como recurso.',
            ],
            [
                'nombre' => 'Sacerdote',
                'descripcion' => 'Función: Daño, sanador. Atributos: Intelecto, aguante. Armadura ligera (tela). Sana daño con magia Sagrada. Inflige daño con magia de las Sombras. Usa maná como recurso.',
            ],
        ];
        // registrar todos
        foreach ($rows as $row) {
            try {
                Clases::create($row);
            } catch (PDOException $e) {
                // @ignoreException
            }
        }
    }
}
