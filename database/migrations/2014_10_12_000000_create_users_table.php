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
            $table->uuid('user_uuid')->index()->primary();
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_othername');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_phone');
            $table->uuid('role_uuid');
            $table->uuid('country_uuid')->nullable();
            $table->uuid('state_uuid')->nullable();
            $table->uuid('city_uuid')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_postal_code')->nullable();
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
