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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('phone');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('trx_id')->nullable();
            $table->string('senderno')->nullable();
            $table->unsignedDouble('current_balance')->default('0');
            $table->unsignedDouble('points')->default('0');
            $table->string('backend_wallet')->nullable();
            $table->string('type')->default('user');
            $table->unsignedBigInteger('invite_id')->nullable();
            $table->string('role')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
