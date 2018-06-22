<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoloamostrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('soloamostras', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('piquete_id');
$table->integer('amostra_id');
$table->date('data');
$table->string('profundidade');
$table->string('ph');
$table->string('mo');
$table->string('p');
$table->string('k');
$table->string('ca');
$table->string('mg');
$table->string('h+ai');
$table->string('ai');
$table->string('s');
$table->string('cu');
$table->string('fe');
$table->string('zn');
$table->string('mn');
$table->string('b');

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
        Schema::drop('soloamostras');
    }

}
