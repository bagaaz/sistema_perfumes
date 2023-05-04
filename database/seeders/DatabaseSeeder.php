<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['nome' => 'Feminino'],
            ['nome' => 'Infantil'],
            ['nome' => 'Masculino'],
            ['nome' => 'Unissex']
        ];

        DB::table('sexos')->insert($sexos);

        //Estaçoes do ano de perfume
        $estacoesAno = [
            ['nome' => 'Primavera'],
            ['nome' => 'Verão'],
            ['nome' => 'Outono'],
            ['nome' => 'Inverno']
        ];

        DB::table('estacoes_ano')->insert($estacoesAno);

        //Periodos do dia de perfume
        $periodosDia = [
            ['nome' => 'Manhã'],
            ['nome' => 'Tarde'],
            ['nome' => 'Noite']
        ];

        DB::table('periodos_dia')->insert($periodosDia);

        //Condições do Clima em um Dia
        $climasDia = [
            ['nome' => 'Quente'],
            ['nome' => 'Fresco'],
            ['nome' => 'Frio']
        ];

        DB::table('climas_dia')->insert($climasDia);
    }
}
