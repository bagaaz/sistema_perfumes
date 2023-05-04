<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->string('pais', 45);
            $table->timestamps();
        });

        Schema::create('grifes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('duracoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('faixas_etarias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('projecoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('sexos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('perfumes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
            $table->string('descricao', 225);
            $table->string('ano_lancamento', 4);
            $table->foreignId('fabricantes_id')->constrained('fabricantes')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('grifes_id')->constrained('grifes')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('duracoes_id')->constrained('duracoes')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('faixas_etarias_id')->constrained('faixas_etarias')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('projecoes_id')->constrained('projecoes')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('sexos_id')->constrained('sexos')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();
        });

        Schema::create('tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->timestamps();
        });

        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->timestamps();
        });

        Schema::create('familias_olfativas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('indicacoes_uso', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('estacoes_ano', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('periodos_dia', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 45)->unique();
            $table->string('senha', 60);
            $table->timestamp('data_nascimento');
            $table->timestamps();
        });

        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'usuarios_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('perfumes_id')->references('id')->on('perfumes');
        });

        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->string('texto', 225);
            $table->timestamp('data_comentario');
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'usuarios_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('perfumes_id')->references('id')->on('perfumes');
        });

        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('data_avaliacao');
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'usuarios_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('perfumes_id')->references('id')->on('perfumes');
        });

        Schema::create('votacoes_estacoes_ano', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estacoes_ano_id');
            $table->unsignedBigInteger('usuarios_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'estacoes_ano_id', 'usuarios_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('estacoes_ano_id')->references('id')->on('estacoes_ano');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('perfumes_id')->references('id')->on('perfumes');
        });

        Schema::create('votacoes_periodos_dia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periodos_dia_id')->constrained('periodos_dia')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('usuarios_id')->constrained('usuarios')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('perfumes_id')->constrained('perfumes')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();

            $table->unique('id');
            $table->index('periodos_dia_id');
            $table->index('usuarios_id');
            $table->index('perfumes_id');
        });

        Schema::create('climas_dia', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->timestamps();

            $table->unique('id');
        });

        Schema::create('votacoes_climas_dia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('climas_dia_id')->constrained('climas_dia')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('usuarios_id')->constrained('usuarios')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('perfumes_id')->constrained('perfumes')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();

            $table->unique('id');
            $table->index('climas_dia_id');
            $table->index('usuarios_id');
            $table->index('perfumes_id');
        });

        Schema::create('votacoes_indicacoes_uso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indicacoes_uso_id')->constrained('indicacoes_uso')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('usuarios_id')->constrained('usuarios')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('perfumes_id')->constrained('perfumes')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();

            $table->unique('id');
            $table->index('indicacoes_uso_id');
            $table->index('usuarios_id');
            $table->index('perfumes_id');
        });

        Schema::create('perfume_tipos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipos_id')->constrained('tipos')->onDelete('no action')->onUpdate('no action');
            $table->foreignId('perfumes_id')->constrained('perfumes')->onDelete('no action')->onUpdate('no action');
            $table->timestamps();

            $table->unique('id');
            $table->index('tipos_id');
            $table->index('perfumes_id');
        });

        Schema::create('perfume_notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notas_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'notas_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('notas_id', 'fk_perfume_notas_notas1')->references('id')->on('notas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('perfumes_id', 'fk_perfume_notas_perfumes1')->references('id')->on('perfumes')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });

        Schema::create('perfume_familia_olfativas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familias_olfativas_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'familias_olfativas_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('familias_olfativas_id', 'fk_perfume_familia_olfativas_familias_olfativas1')->references('id')->on('familias_olfativas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('perfumes_id', 'fk_perfume_familia_olfativas_perfumes1')->references('id')->on('perfumes')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });

        Schema::create('perfume_categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorias_id');
            $table->unsignedBigInteger('perfumes_id');
            $table->timestamps();

            $table->unique(['id', 'categorias_id', 'perfumes_id'], 'id_UNIQUE');
            $table->foreign('categorias_id', 'fk_perfume_categorias_categorias1')->references('id')->on('categorias')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('perfumes_id', 'fk_perfume_categorias_perfumes1')->references('id')->on('perfumes')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });

        Schema::create('familia_olfativa_notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notas_id');
            $table->unsignedBigInteger('familias_olfativas_id');
            $table->timestamps();

            $table->unique(['id', 'notas_id', 'familias_olfativas_id'], 'id_UNIQUE');
            $table->foreign('notas_id', 'fk_familia_olfativa_notas_notas1')->references('id')->on('notas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('familias_olfativas_id', 'fk_familia_olfativa_notas_familias_olfativas1')->references('id')->on('familias_olfativas')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familia_olfativa_notas');
        Schema::dropIfExists('perfume_categorias');
        Schema::dropIfExists('perfume_familia_olfativas');
        Schema::dropIfExists('perfume_notas');
        Schema::dropIfExists('perfume_tipos');
        Schema::dropIfExists('votacoes_indicacoes_uso');
        Schema::dropIfExists('votacoes_climas_dia');
        Schema::dropIfExists('climas_dia');
        Schema::dropIfExists('votacoes_periodos_dia');
        Schema::dropIfExists('votacoes_estacoes_ano');
        Schema::dropIfExists('avaliacoes');
        Schema::dropIfExists('comentarios');
        Schema::dropIfExists('favoritos');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('periodos_dia');
        Schema::dropIfExists('estacoes_ano');
        Schema::dropIfExists('indicacoes_uso');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('familias_olfativas');
        Schema::dropIfExists('notas');
        Schema::dropIfExists('tipos');
        Schema::dropIfExists('perfumes');
        Schema::dropIfExists('sexos');
        Schema::dropIfExists('projecoes');
        Schema::dropIfExists('faixas_etarias');
        Schema::dropIfExists('duracoes');
        Schema::dropIfExists('grifes');
        Schema::dropIfExists('fabricantes');
    }
};
