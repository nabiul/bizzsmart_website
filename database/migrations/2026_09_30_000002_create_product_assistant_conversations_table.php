<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_assistant_conversations', function (Blueprint $table): void {
            $table->id();
            $table->uuid('public_token')->unique();
            $table->string('name', 120);
            $table->string('email', 190);
            $table->string('company', 190)->nullable();
            $table->string('phone', 40);
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamp('last_message_at')->nullable();
            $table->timestamps();
        });

        Schema::create('product_assistant_messages', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('conversation_id')->constrained('product_assistant_conversations')->cascadeOnDelete();
            $table->string('role', 20);
            $table->longText('content');
            $table->timestamps();
            $table->index(['conversation_id', 'id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_assistant_messages');
        Schema::dropIfExists('product_assistant_conversations');
    }
};
