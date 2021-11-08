<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("id_user")->nullable(); //Кто взял задание
            $table->string('name'); //Название
            $table->enum('rank', ["F", "D", "B", "C", "A", "S"]); //Ранг
            $table->integer("money"); //Монеты
            $table->text("additional_remuneration")->nullable(); //Что то дополнительное
            $table->longText('description'); //Описание (Текстовое поле, с достижениями, проступками и краткой информацией)
            $table->longText('note')->nullable(); //Заметка
            $table->timestamps(); //Временая метка
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quests');
    }
}
