<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome',70);
            $table->String('endereco',80);
            $table->String('cpf',11);
            $table->String('fone',15);
            $table->String('email',70);
            $table->String('bairro',40);
            $table->String('cidade',40);
            $table->String('cep',10);
            $table->String('uf',2);

                        
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquilinos');
    }
}
