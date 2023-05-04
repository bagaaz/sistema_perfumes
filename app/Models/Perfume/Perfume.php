<?php

namespace App\Models\Perfume;

use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    protected $table = 'perfumes';
    protected $fillable = ['nome', 'descricao', 'ano_lancamento', 'fabricantes_id', 'grifes_id', 'duracoes_id', 'faixas_etarias_id', 'projecoes_id','sexos_id'];

    public function fabricante()
    {
        return $this->belongsTo('App\Models\Fabricante', 'fabricantes_id');
    }

    public function grife()
    {
        return $this->belongsTo('App\Models\Grife', 'grifes_id');
    }

    public function duracao()
    {
        return $this->belongsTo('App\Models\Duracao', 'duracoes_id');
    }

    public function faixa_etaria()
    {
        return $this->belongsTo('App\Models\FaixaEtaria', 'faixas_etarias_id');
    }

    public function projecao()
    {
        return $this->belongsTo('App\Models\Projecao', 'projecoes_id');
    }

    public function sexo()
    {
        return $this->belongsTo('App\Models\Sexo', 'sexos_id');
    }
}
