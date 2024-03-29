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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playtime_id');
            $table->foreignId('product_id');
            $table->string("namateam");
            $table->string("namapenanggungjawab");
            $table->string("alamat");
            $table->char("notelepon");
            // $table->date("tglmain");
            // $table->date("endtgl");
            // $table->string("image");

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
        Schema::dropIfExists('bookings');
    }
};
