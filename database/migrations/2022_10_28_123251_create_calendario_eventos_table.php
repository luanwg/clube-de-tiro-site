<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendario_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->timestamps();
        });
        Schema::table('calendarios', function (Blueprint $table) {
            $table->unsignedBigInteger('calendario_eventos_id')->after('ending_at');
            $table->foreign('calendario_eventos_id')->references('id')->on('calendario_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendarios', function (Blueprint $table) {
            $table->dropForeign('calendarios_calendario_eventos_id_foreign');
            $table->dropColumn('calendario_eventos_id');

        });
        Schema::dropIfExists('calendario_eventos');
    }
};
