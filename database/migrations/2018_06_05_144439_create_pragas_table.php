<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('pragas', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('amostra_id');
$table->string('tipo');
$table->string('especie');
$table->string('densidade');
$table->string('area');

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
        Schema::drop('pragas');
    }

}
