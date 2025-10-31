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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('table');
            $table->string('register_id')->nullable();
            $table->foreignUuid('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->enum('type', ['create', 'update', 'delete']);
            $table->text('fields_changed')->nullable();
            $table->timestamp('logged_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
