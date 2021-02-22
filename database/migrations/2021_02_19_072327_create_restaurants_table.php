<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('음식점 이름');
            $table->string('category')->comment('카테고리');
            $table->string('branch')->nullable()->comment('지점명');
            $table->string('address')->comment('주소');
            $table->text('etc')->nullable()->comment('기타 정보');
            $table->tinyInteger('closed')->default(0)->comment('폐점 여부');
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
        Schema::dropIfExists('restaurants');
    }
}
