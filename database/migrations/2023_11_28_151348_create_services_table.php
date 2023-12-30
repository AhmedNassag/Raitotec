<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('first_title_ar')->nullable();
            $table->string('first_title_en')->nullable();
            $table->text('first_content_ar')->nullable();
            $table->text('first_content_en')->nullable();
            $table->string('second_title_ar')->nullable();
            $table->string('second_title_en')->nullable();
            $table->text('second_content_ar')->nullable();
            $table->text('second_content_en')->nullable();
            $table->string('slug_ar')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('services');
    }
}
