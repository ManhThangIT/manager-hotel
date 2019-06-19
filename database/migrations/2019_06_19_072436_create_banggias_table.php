<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanggiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banggias', function (Blueprint $table) {
            $table->integer('bangGia_maLoaiPhong')->unsigned();
			$table->integer('bangGia_maKieuThue')->unsigned();
			$table->float('bangGia_giaTien');
            $table->timestamps();
        });
        Schema::table('banggias', function (Blueprint $table) {
			$table->primary(['bangGia_maLoaiPhong', 'bangGia_maKieuThue'], 'my_long_table_primary');
			$table->foreign('bangGia_maLoaiPhong')->references('loaiPhong_ma')->on('loaiphongs')->unsigned();
			$table->foreign('bangGia_maKieuThue')->references('kieuThue_ma')->on('kieuthues')->unsigned();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banggias');
    }
}
