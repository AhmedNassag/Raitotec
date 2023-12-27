<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('first_title_ar')->nullable();
            $table->string('first_title_en')->nullable();
            $table->longText('first_content_ar')->nullable();
            $table->longText('first_content_en')->nullable();
            $table->string('second_title_ar')->nullable();
            $table->string('second_title_en')->nullable();
            $table->longText('second_content_ar')->nullable();
            $table->longText('second_content_en')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('blogs');
    }
}
