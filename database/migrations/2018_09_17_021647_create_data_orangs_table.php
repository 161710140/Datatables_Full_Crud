<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataOrangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_orangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('Lahir');
            $table->string('Status');
            $table->string('Gender');
            $table->text('Alamat');
            $table->text('Photo')->nullable();
            $table->string('Pekerjaan');
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
        Schema::dropIfExists('data_orangs');
    }
}
