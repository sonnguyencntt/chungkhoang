<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takhoan', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->integer('id_tai_khoan')->unique();
            $table->text('ho_va_ten');
            $table->string('email');
            $table->integer('sdt');
            $table->string('mat_khau');
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
        Schema::dropIfExists('takhoan');
    }
}
