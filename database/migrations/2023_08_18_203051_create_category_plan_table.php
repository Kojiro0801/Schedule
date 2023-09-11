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
      Schema::create('category_plan', function (Blueprint $table) {
         $table->foreignId('category_id')->constrained('categories');
         $table->foreignId('plan_id')->constrained('plans');
        $table->primary(['category_id', 'plan_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('category_plan');
    }
};
