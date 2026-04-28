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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // basic user info
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            // auth
            $table->string('password')->nullable(); // nullable untuk login google
            $table->string('google_id')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('provider', ['local','google'])->default('local');

            // role system
            $table->enum('role', ['admin','user'])->default('user');

            // laravel system
            $table->rememberToken();
            $table->timestamps();
        });

        // RESET PASSWORD (jangan dihapus)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // SESSION (penting buat auth laravel)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};