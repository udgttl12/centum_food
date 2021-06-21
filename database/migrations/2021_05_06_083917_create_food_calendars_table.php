<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_calendars', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('food')->comment('음식 이름');
            $table->string('content')->comment('내용');
            $table->string('comment')->nullable()->comment('코멘트');
            $table->unsignedBigInteger('created_by')->comment('작성자');
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
        Schema::dropIfExists('food_calendar');
    }
}
