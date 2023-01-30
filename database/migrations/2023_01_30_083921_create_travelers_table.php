<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelers', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_no');
            $table->string('country_code');
            $table->string('otp_code');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->enum('gender',['male','female']);
            $table->string('place_of_birth');
            $table->string('country_of_residency');
            $table->string('passport_no');
            $table->string('issue_date');
            $table->string('expiry_date'); 
            
            $table->string('place_of_issue');
            $table->string('arrival_date');
            $table->string('profession')->nullable();
            $table->string('organization')->nullable();
            $table->string('visa_duration')->nullable();
            $table->enum('visa_status',['multiple','single']);
            $table->string('passport_picture');
            $table->string('personal_picture');
            $table->enum('companion',['yes','no']);
             
            
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
        Schema::dropIfExists('travelers');
    }
}
