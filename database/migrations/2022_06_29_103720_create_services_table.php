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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('auth_id');
            $table->string('cat_id');
            $table->string('subcat_id');
            $table->string('add_info1')->nullable();
            $table->string('add_info2')->nullable();
            $table->string('add_info3')->nullable();
            $table->string('add_info4')->nullable();
            $table->string('add_info5')->nullable();
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
        Schema::dropIfExists('services');
    }
};
