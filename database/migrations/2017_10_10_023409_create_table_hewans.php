<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHewans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           $table->increments('id');

            $table->String('jenisHewan');
            $table->String('harga');
            $table->String('bobot');
            $table->String('umur');
            $table->String('lokasi');
            $table->String('tumbuh');
            $table->String('deskripsi');
            $table->String('biayaperawatan');
            $table->String('biayapakan');

            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('hewans');
    }
}
