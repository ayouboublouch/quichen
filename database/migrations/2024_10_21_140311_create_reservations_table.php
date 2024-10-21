<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();  // Equivalent to 'reservationId'
            $table->integer('numberOfTables');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->dateTime('date');
            $table->integer('numberOfGuests');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}