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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained("users");
            $table->foreignId('sender_id')->constrained("senders_ids");
            $table->string(column: 'Destinataire');
            $table->string(column: 'Contenu');
            $table->boolean(column: 'Status')->nullable();
            $table->foreignId('device_id')->constrained("devices")->nullable();
            $table->integer(column: 'Count')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
