<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('animals', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('fazenda_id');
$table->integer('numero_fazenda');
$table->string('pai');
$table->string('mae');
$table->date('nascimento');
$table->string('procedencia');
$table->date('entrada_fazenda');
$table->date('saida_fazenda');

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
        Schema::drop('animals');
    }

}
