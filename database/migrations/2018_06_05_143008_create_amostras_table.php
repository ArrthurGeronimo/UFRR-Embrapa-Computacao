<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmostrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('amostras', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('numero_amostra');
$table->string('bloco');
$table->string('tratamento');
$table->string('area_parcela');
$table->integer('animal_id');
$table->integer('praga_id');
$table->integer('plantiocultura_id');
$table->integer('soloamostra_id');
$table->integer('pastagemamostra_id');

                $table->timestamps();
                $table->softDeletes();
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amostras');
    }

}
