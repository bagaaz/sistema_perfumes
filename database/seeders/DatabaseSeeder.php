<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sexos de perfume
        $sexos = [
            ['nome' => 'Feminino', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Infantil', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Masculino', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Unissex', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('sexos')->insert($sexos);

        //Estaçoes do ano de perfume
        $estacoesAno = [
            ['nome' => 'Primavera', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Verão', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Outono', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Inverno', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('estacoes_ano')->insert($estacoesAno);

        //Periodos do dia de perfume
        $periodosDia = [
            ['nome' => 'Manhã', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Noite', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('periodos_dia')->insert($periodosDia);

        //Condições do Clima em um Dia
        $climasDia = [
            ['nome' => 'Quente', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Fresco', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Frio', 'created_at' => now(), 'updated_at' => now()]
        ];

        DB::table('climas_dia')->insert($climasDia);
    }
}
