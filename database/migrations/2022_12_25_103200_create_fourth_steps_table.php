<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFourthStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fourth_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('ThirdStepId');
            $table->string('present_in_uae');
            $table->string('country')->nullable();
            $table->string('visa_status')->nullable();
            $table->date('expiry_date')->nullable();
            $table->date('anticipated_date')->nullable();
            $table->string('driving_license')->nullable();
            $table->string('own_car')->nullable();
            $table->integer('work_experience')->nullable();
            $table->integer('real_estate_experience')->nullable();
            $table->integer('dubai_real_estate_experience')->nullable();
            $table->string('rera_card')->nullable();
            $table->integer('rera_card_no')->nullable();
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
        Schema::dropIfExists('fourth_steps');
    }
}
