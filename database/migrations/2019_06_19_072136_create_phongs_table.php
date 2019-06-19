<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->increments('phong_ma')->unsigned();
			$table->string('phong_ten', 100);
			$table->integer('phong_maTang')->unsigned();
			$table->integer('phong_maLoaiPhong')->unsigned();
			$table->integer('phong_maTrangThaiPhong')->unsigned();
			$table->text('phong_ghiChu');
            $table->timestamps();
        });
        Schema::table('phongs', function (Blueprint $table) {
			$table->foreign('phong_maTang')->references('tang_ma')->on('tangs')->unsigned();
			$table->foreign('phong_maLoaiPhong')->references('loaiPhong_ma')->on('loaiphongs')->unsigned();
			$table->foreign('phong_maTrangThaiPhong')->references('trangThaiPhong_ma')->on('trangthaiphongs')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongs');
    }
}
