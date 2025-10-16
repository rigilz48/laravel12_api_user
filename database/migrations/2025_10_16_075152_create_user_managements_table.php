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
        Schema::create('user_management', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama', 100);
            $table->string('email', 100)->unique();
            $table->string('nomor_telepon', 15);
            $table->boolean('status_aktif')->default(TRUE);
            $table->string('departement', 100);
            $table->timestamps();

            // Constraint tambahan untuk PostgreSQL (opsional)
            $table->check("char_length(nomor_telepon) >= 10");
            $table->check("email ~* '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_management');
    }
};
