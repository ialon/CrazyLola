<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_6669447')->references('id')->on('users');
            $table->unsignedBigInteger('distributor_id')->nullable();
            $table->foreign('distributor_id', 'distributor_fk_6669448')->references('id')->on('distributors');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_6669457')->references('id')->on('order_statuses');
        });
    }
}
