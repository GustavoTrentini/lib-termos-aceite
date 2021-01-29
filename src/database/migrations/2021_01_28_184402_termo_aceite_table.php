<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TermoAceiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termo_aceite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('termo', 5000);
            $table->bigInteger('user_id');
            $table->string('version');
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
        Schema::dropIfExists('termo_aceite');

    }
}
