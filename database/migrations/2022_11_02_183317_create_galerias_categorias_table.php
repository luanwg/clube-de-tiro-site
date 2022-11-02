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
        Schema::create('galerias_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->timestamps();
        });
        Schema::table('galerias', function (Blueprint $table) {
            $table->unsignedBigInteger('galerias_categorias_id')->after('user_id');
            $table->foreign('galerias_categorias_id')->references('id')->on('galerias_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galerias', function (Blueprint $table) {
            $table->dropForeign('galerias_galerias_categorias_id_foreign');
            $table->dropColumn('galerias_categorias_id');

        });
        Schema::dropIfExists('galerias_categorias');
    }
};
