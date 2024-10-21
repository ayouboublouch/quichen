<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id(); // This is the primary key
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('price', 8, 2);
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade'); // Foreign key to menus
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}