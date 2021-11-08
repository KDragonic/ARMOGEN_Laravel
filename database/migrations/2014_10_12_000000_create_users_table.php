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
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name');
            $table->string('password');
            $table->enum('rank', ["F", "D", "B", "C", "A", "S"]); //Ранг
            $table->longText('description'); //Описание (Текстовое поле, с достижениями, проступками и краткой информацией)
            //Выполненые задание в другой таблице
            $table->enum('gender', ["male", "netral", "female"]); //Гендер
            $table->rememberToken();
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
