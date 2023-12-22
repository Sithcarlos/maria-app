<?php
declare(strict_types=1);
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //
        $this->call(ClasesSeeder::class);
        // \App\Models\Cat\Clases::factory(10)->create();
        //
        $this->call(FaccionesSeeder::class);
        // \App\Models\Cat\Facciones::factory(2)->create();
        //
        // \App\Models\Cat\Razas::factory(2)->create();
        $this->call(RazasSeeder::class);
        //
        // \App\Models\Rel\RazasClases::factory(1)->create();
        $this->call(RazasClasesSeeder::class);
        //
        \App\Models\Guilds::factory(2)->create();
        //
        // \App\Models\Avatares::factory(20)->create();
        $this->call(AvataresSeeder::class);
        //
    }
}
