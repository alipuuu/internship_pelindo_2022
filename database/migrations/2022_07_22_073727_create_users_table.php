<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('id_penempatan')->nullable();
            $table->string('id_divisi')->nullable();
            $table->string('id_magang')->nullable();
            $table->string('id_jadwal')->nullable(); //wfh wfo konsinyering
            $table->string('id_kehadiran')->nullable(); //datang pulang
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nik')->default('-');
            $table->string('instansi')->default('-');
            $table->string('no_telp')->default('-');
            $table->string('berkas')->default('-');
            $table->string('status')->default('0');
            $table->string('level')->default('2');
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
        Schema::dropIfExists('users');
    }
}
