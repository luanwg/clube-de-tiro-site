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
        Schema::create('noticias_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });
        Schema::table('noticias', function (Blueprint $table) {
            $table->unsignedBigInteger('noticias_categorias_id')->after('image');
            $table->foreign('noticias_categorias_id')->references('id')->on('noticias_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticias', function (Blueprint $table) {
            $table->dropForeign('noticias_noticias_categorias_id_foreign');
            $table->dropColumn('noticias_categorias_id');

        });
        Schema::dropIfExists('noticias_categorias');
    }
};
