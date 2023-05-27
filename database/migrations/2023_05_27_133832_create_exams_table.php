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
            $table->integer('retry');
            $table->string('status');
            $table->boolean('done_workshop');
            $table->boolean('done_class');

            $table->biginteger('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exams', function($table) {
            $table->dropForeign('exams_student_id_foreign');
            $table->dropColumn('student_id');
        });
        Schema::dropIfExists('exams');
    }
};
