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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('nik')->default('-');
            $table->string('instansi')->default('-');
            $table->string('no_telp')->default('-');
            $table->string('berkas')->default('-');
            $table->string('status')->default('0');
            $table->string('level')->default('2');
            $table->string('id_penempatan')->default('-');
            $table->string('id_divisi')->default('-');
            $table->string('id_magang')->default('-');
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
