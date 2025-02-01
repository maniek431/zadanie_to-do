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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa_zadania');
            $table->text('opis')->nullable();
            $table->enum('priorytet', ['low', 'medium', 'high']);
            $table->enum('status', ['todo', 'in_progress', 'done']);
            $table->date('termin') -> nullable();
            $table->timestamps();
            $table->foreignId('user_id')->default(1)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
    };
