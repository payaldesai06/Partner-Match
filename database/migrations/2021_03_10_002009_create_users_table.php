<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('email')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('occupation')->nullable();
            $table->string('family_type')->nullable();
            $table->boolean('manglik_status')->default(0);
            $table->string('expected_annual_income_min')->nullable();
            $table->string('expected_annual_income_max')->nullable();
            $table->string('expected_occupation')->nullable();
            $table->string('expected_family_type')->nullable();
            $table->boolean('expected_manglik_status')->default(0);
            $table->string('google_id')->nullable();
            $table->boolean('is_active')->default(1);
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
}
