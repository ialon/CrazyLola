<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreReportsTable extends Migration
{
    public function up()
    {
        Schema::create('store_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store')->unique();
            $table->integer('products')->nullable();
            $table->integer('orders')->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
