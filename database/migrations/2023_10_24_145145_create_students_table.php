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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name', 100)->nullable()->default('text');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->foreign('class_id')
                         ->references('id')
                         ->on('e_class_rooms')
                         ->onUpdate('cascade')
                         ->onDelete('cascade');
            $table->string('email', 100)->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
