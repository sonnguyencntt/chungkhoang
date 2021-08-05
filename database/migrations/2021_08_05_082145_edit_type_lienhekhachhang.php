<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTypeLienhekhachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lienhekhachhang', function (Blueprint $table) {
            $table->string('ho_va_ten', 255)->change();
            $table->text('dich_vu_tu_van')->change();


                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
