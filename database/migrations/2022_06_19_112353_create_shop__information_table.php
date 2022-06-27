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
        Schema::create('shop__information', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('b_ien');
            $table->string('b_certificate');
            $table->string('b_registration');
            $table->string('nail_salon');
            $table->string('e_certificate');
            $table->string('b_insurance');
            $table->string('b_workers');
            $table->string('driver_license');
            $table->boolean('verified_at');
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
        Schema::dropIfExists('shop__information');
    }
};
