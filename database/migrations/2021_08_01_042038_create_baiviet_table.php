<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hinh_anh', 100);
            $table->date('ngay_dang');
            $table->text('tieu_de');
            $table->text('noi_dung');
            $table->text('tom_tat');
            $table->integer('id_bai_viet')->unique();
            $table->integer('id_taikhoan');
            $table->integer('id_danh_muc');
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
        Schema::dropIfExists('baiviet');
    }
}
