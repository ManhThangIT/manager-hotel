<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChietkhausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chietkhaus', function (Blueprint $table) {
            $table->increments('chietKhau_ma')->unsigned();
			$table->string('chietKhau_ten', 100);
			$table->float('chietKhau_soTien');
			$table->integer('chietKhau_phanTram');
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
        Schema::dropIfExists('chietkhaus');
    }
}
