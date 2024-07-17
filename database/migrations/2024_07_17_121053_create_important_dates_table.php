<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('important_dates', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->dateTime('event_date')->nullable();
            $table->unsignedBigInteger('event_type'); //Merisik, Engagement, Solemnization, Reception
            $table->unsignedBigInteger('category'); //Reminders, Countdown
            $table->unsignedInteger('days_left');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('event_type')->references('id')->on('references')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('references')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('important_dates');
    }
};
