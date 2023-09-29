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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('des', 500);
            $table->string('img', 50);
            $table->string('genre', 100);
            $table->string('release', 10);
            $table->string('status', 10);
            $table->string('rate', 2);
            $table->string('list_ep', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
