<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_schedule', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->primary(['category_id', 'schedule_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('category_schedule');
    }
};
