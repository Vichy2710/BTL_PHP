<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangCanBo', function (Blueprint $table) {
            $table->id(); // id can bo
            $table->string('HoTen');
            $table->string('Email')->unique();
            $table->string('DiaChi');
            $table->string('GioiTinh');
            $table->string('SoTaiKhoan');
            $table->dateTime('NgaySinh');
            $table->string('CCDC'); // căn cước công dân
            $table->integer('sdt');
            $table->integer('MaLuong');
            $table->integer('MaPB');
            $table->integer('MaHV');
            $table->integer('MaCV');
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
        Schema::dropIfExists('bangCanBo');
    }
};
