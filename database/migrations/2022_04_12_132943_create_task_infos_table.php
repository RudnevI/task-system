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
        Schema::create('task_infos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->text('comment');
            $table->foreignId('task_id')->constrained();
            $table->foreignId('job_id')->constrained();
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
        Schema::dropIfExists('task_infos');
    }
};
