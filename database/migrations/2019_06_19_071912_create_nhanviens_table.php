<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->increments('nhanVien_ma')->unsigned();
			$table->string('nhanVien_ten', 100);
			$table->date('nhanVien_ngaySinh');
			$table->string('nhanVien_soDienThoai', 20);
			$table->string('nhanVien_email', 100);
			$table->integer('nhanVien_gioiTinh');
			$table->text('nhanVien_diaChi');
			$table->text('nhanVien_anh');
			$table->integer('nhanVien_maCongViec')->unsigned();
            $table->timestamps();
        });
        Schema::table('nhanviens', function (Blueprint $table) {
			$table->foreign('nhanVien_maCongViec')->references('congViec_ma')->on('congviecs');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanviens');
    }
}
