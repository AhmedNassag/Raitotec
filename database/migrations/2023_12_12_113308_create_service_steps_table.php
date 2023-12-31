<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_steps', function (Blueprint $table) {
            $table->id();
            $table->text('content_ar')->nullable();
            $table->text('content_en')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('service_id')->nullable()->constrained('services')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('service_steps');
    }
}
