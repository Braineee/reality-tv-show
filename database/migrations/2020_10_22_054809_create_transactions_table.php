<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('transaction_uuid')->index()->primary();
            $table->uuid('user_uuid');
            $table->integer('amount')->nullable();
            $table->string('payment_description')->nullable();
            $table->string('currency')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('status')->nullable();
            $table->string('reference')->nullable();
            $table->string('domain')->nullable();
            $table->string('metadata')->nullable();
            $table->text('custom_fields')->nullable();// Json stringify
            $table->string('gateway_response')->nullable();
            $table->string('message')->nullable();
            $table->string('channel')->nullable();  
            $table->string('ip_address')->nullable();
            $table->string('log')->nullable();
            $table->text('authorization')->nullable();// Json stringify
            $table->text('customer')->nullable();// Json stringify
            $table->string('plane')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
