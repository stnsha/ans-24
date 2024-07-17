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
        /**
         * id: 1
         * parent_id: 0
         * Description: Important Dates
         * 
         * id: 2
         * parent_id: 1
         * Description: Reminders
         * 
         * id: 3
         * parent_id: 1
         * Description: Countdown
         */
        Schema::create('references', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('references')->onDelete('cascade');
            $table->index(['parent_id', 'description'], null, 'btree');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('references');
    }
};
