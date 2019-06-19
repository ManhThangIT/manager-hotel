<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadons', function (Blueprint $table) {
            $table->string('hoaDon_ma', 100);
			$table->date('hoaDon_ngayTao');
			$table->integer('hoaDon_maKhachHang')->unsigned();
			$table->integer('hoaDon_maAdmin')->unsigned();
			$table->datetime('hoaDon_ngayThue');
			$table->datetime('hoaDon_ngayTraDuKien');
			$table->datetime('hoaDon_ngayTra');
			$table->float('hoaDon_tamThu');
			$table->float('hoaDon_tienNhan');
			$table->float('hoaDon_traLai');
			$table->integer('hoaDon_maChietKhau')->unsigned();
			$table->integer('hoaDon_maTinhTrang')->unsigned();
			$table->text('hoaDon_ghiChu');
            $table->timestamps();
        });
        Schema::table('hoadons', function (Blueprint $table) {
			$table->primary('hoaDon_ma');
			$table->foreign('hoaDon_maKhachHang')->references('khachHang_ma')->on('khachhangs')->unsigned();
			$table->foreign('hoaDon_maAdmin')->references('id')->on('users')->unsigned();
			$table->foreign('hoaDon_maChietKhau')->references('chietKhau_ma')->on('chietkhaus')->unsigned();
			$table->foreign('hoaDon_maTinhTrang')->references('tinhTrangHoaDon_ma')->on('tinhtranghoadons')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}
