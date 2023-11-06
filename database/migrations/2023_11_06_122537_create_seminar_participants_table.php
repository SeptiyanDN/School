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
        Schema::create('seminar_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_seminar'); // Kolom kunci asing ke tabel seminars
            $table->string('number_registration');
            $table->string('full_name');
            $table->string('email');
            $table->integer('class');
            $table->string('program_study');
            $table->string('nis');
            $table->timestamps();
            $table->foreign('id_seminar')
                ->references('id')
                ->on('seminars')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminar_participants');
    }
};
