<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitiethoadondichvusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadondichvus', function (Blueprint $table) {
            $table->string('chiTietHoaDonDichVu_maHoaDon', 100);
			$table->integer('chiTietHoaDonDichVu_maDichVu')->unsigned();
			$table->integer('chiTietHoaDonDichVu_soLuong');
            $table->timestamps();
        });
        Schema::table('chitiethoadondichvus', function (Blueprint $table) {
			$table->primary(['chiTietHoaDonDichVu_maHoaDon', 'chiTietHoaDonDichVu_maDichVu'], 'my_long_table_primary');
			$table->foreign('chiTietHoaDonDichVu_maHoaDon')->references('hoaDon_ma')->on('hoadons');
			$table->foreign('chiTietHoaDonDichVu_maDichVu')->references('dichVu_ma')->on('dichvus')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethoadondichvus');
    }
}
