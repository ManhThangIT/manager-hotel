<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiphongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaiphongs', function (Blueprint $table) {
            $table->increments('loaiPhong_ma')->unsigned();
			$table->string('loaiPhong_ten', 100);
			$table->integer('loaiPhong_soNguoiToiDa');
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
        Schema::dropIfExists('loaiphongs');
    }
}
