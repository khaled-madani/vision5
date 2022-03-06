<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('expire_date');
            $table->integer('f_numbers');
            $table->string('wife_name');
            $table->foreignId('user_id');
            // $table->foreignId('user_id')->constrained('user','s_id'); // اذا كان اسم اي دي مختلف
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
        Schema::dropIfExists('insurances');
    }
};
