<?php

namespace Database\Seeders;

use App\Models\Maquina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaquinasTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maquina::factory()->create([
            'nome' => 'Torno CNC Hardinge GS 200',
            'imagem' => 'gs200_torno.jpg',
            'ultima_manutencao' => '2024-09-01'
        ]);

        Maquina::factory()->create([
            'nome' => 'Bomba ITAP',
            'imagem' => 'ITAP.png',
            'ultima_manutencao' => '2024-09-15'
        ]);

        Maquina::factory()->create([
            'nome' => 'Fresadora XYZ',
            'imagem' => 'fresadora_xyz.jpg',
            'ultima_manutencao' => '2024-08-25'
        ]);

        Maquina::factory()->create([
            'nome' => 'Serra Fita ABC',
            'imagem' => 'serra_fita_abc.jpg',
            'ultima_manutencao' => '2024-08-30'
        ]);
    }
}
