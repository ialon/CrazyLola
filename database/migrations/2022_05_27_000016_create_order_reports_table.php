<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReportsTable extends Migration
{
    public function up()
    {
        Schema::create('order_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order')->unique();
            $table->integer('item_count')->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
