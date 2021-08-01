<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienhekhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienhekhachhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_lien_he_khach_hang')->unique();
            $table->text('ho_va_ten');
            $table->string('email')->unique();
            $table->string('email_du_phong')->unique();
            $table->string('dich_vu_tu_van');
            $table->string('noi_dung');       
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
        Schema::dropIfExists('lienhekhachhang');
    }
}
