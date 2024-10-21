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
        Schema::create('menu_has_menu_items', function (Blueprint $table) {
            $table->id(); // Primary key for the pivot table
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade'); // Foreign key to menus
            $table->foreignId('menu_item_id')->constrained('menu_items')->onDelete('cascade'); // Foreign key to menu_items
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_has_menu_items');
    }
};