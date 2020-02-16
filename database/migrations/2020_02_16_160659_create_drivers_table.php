<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('vehicle_id');
            $table->longText('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('employeeID');
            $table->string('contract_no');
            $table->string('license_no');
            $table->date('issue_date');
            $table->date('expiration_date');
            $table->date('join_date');
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('document')->nullable();
            $table->string('license_image')->nullable();
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
        Schema::dropIfExists('drivers');
    }
}
