<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email');
            $table->string('Gender');
            $table->string('MobileNumber');
            $table->string('city');
            $table->timestamp('Arrive')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('Depart')->nullable(true);
            $table->integer('no_of_persons');
            $table->string('RoomType');
            $table->string('Status');
            $table->string('Address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
