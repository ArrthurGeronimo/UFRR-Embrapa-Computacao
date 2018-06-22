<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlantioculturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('plantioculturas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('amostra_id');
$table->date('data_amostra');
$table->string('peso_parcela');
$table->string('peso_amostra');
$table->integer('quantidade_espigas');

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
        Schema::drop('plantioculturas');
    }

}
