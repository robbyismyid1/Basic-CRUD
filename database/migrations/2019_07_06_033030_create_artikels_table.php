<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('slug');
            $table->text('konten');
            $table->string('foto');
            $table->boolean('status')->default(true);
            $table->integer('kategori_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('artikels');
    }
}
