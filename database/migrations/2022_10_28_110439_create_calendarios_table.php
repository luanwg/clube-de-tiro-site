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
        Schema::create('calendarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->timestamp('starting_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('ending_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
            $table->dropForeign('calendarios_user_id_foreign');
        });
        Schema::dropIfExists('calendarios');
    }
};
