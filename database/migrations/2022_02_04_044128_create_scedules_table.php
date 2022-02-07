<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('IN');
            $table->time('Out')->nullable();
            $table->string('location_In', 100);
            $table->string('location_Out', 100)->nullable();
            $table->timestamps();
        });

        Schema::table('scedules', function (Blueprint $table) {
            $table->foreignId('idEmployees')->constrained('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scedules');
    }
}