<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->integer('traveler_id')->unsigned();
            $table->string('check_in_date');
            $table->string('check_out_date');
            $table->string('rom_type');
            $table->string('check_in_date_extra');
            $table->string('check_out_date_extra');
            $table->string('rom_type_extra'); 
            $table->timestamps();
            
            $table->foreign('traveler_id')->references('id')->on('travelers') 
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodations');
    }
}
