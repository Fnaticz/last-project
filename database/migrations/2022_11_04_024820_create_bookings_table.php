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
            $table->string("namateam");
            $table->string("namapenanggungjawab");
            $table->string("alamat");
            $table->char("notelepon");
            $table->date("tglmain");
<<<<<<< HEAD
            $table->date("endtgl");
            // $table->string("image");
=======
>>>>>>> b35ebd1a06f5efa0cc96764a88c6c5483bb9c55c
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
