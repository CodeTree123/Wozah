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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('shop_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id');
            $table->string('b_legal_name')->nullable();
            $table->string('b_dba')->nullable();
            $table->string('street_number_b')->nullable();
            $table->string('apt_b')->nullable();
            $table->string('city_b')->nullable();
            $table->string('state_b')->nullable();
            $table->string('zip_b')->nullable();
            $table->string('street_number_c')->nullable();
            $table->string('apt_c')->nullable();
            $table->string('city_c')->nullable();
            $table->string('state_c')->nullable();
            $table->string('zip_c')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_street_name')->nullable();
            $table->string('customer_street_number')->nullable();
            $table->string('customer_apt')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_state')->nullable();
            $table->string('customer_zip')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
