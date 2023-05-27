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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->date('inscription_date');
            $table->integer('parcial');
            $table->string('student_id');
            $table->integer('retry');
            $table->date('presentation_date');
            $table->string('status');
            $table->boolean('done_workshop');
            $table->boolean('done_workshop');
            $table->timestamps('done_class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
