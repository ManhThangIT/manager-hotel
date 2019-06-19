<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadonphongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadonphongs', function (Blueprint $table) {
            $table->string('chiTietHoaDonPhong_maHoaDon', 100);
			$table->integer('chiTietHoaDonPhong_maPhong')->unsigned();
			$table->integer('chiTietHoaDonPhong_maKieuThue')->unsigned();
            $table->timestamps();
        });
        Schema::table('chitiethoadonphongs', function (Blueprint $table) {
			$table->primary(['chiTietHoaDonPhong_maHoaDon', 'chiTietHoaDonPhong_maPhong'], 'my_long_table_primary');
			$table->foreign('chiTietHoaDonPhong_maHoaDon')->references('hoaDon_ma')->on('hoadons');
			$table->foreign('chiTietHoaDonPhong_maPhong')->references('phong_ma')->on('phongs')->unsigned();
			$table->foreign('chiTietHoaDonPhong_maKieuThue')->references('kieuThue_ma')->on('kieuthues')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadonphongs');
    }
}
