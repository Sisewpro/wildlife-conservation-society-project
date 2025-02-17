<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul artikel
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke tabel users
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP')); // Menggunakan CURRENT_TIMESTAMP
            $table->time('time'); // Waktu artikel
            $table->string('location'); // Lokasi artikel
            $table->text('content'); // Isi artikel termasuk deskripsi
            $table->string('file')->nullable(); // Path file (audio, video, atau foto)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
}