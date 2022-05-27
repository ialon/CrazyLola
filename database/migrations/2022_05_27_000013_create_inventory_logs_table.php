<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryLogsTable extends Migration
{
    public function up()
    {
        Schema::create('inventory_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inventory');
            $table->float('quantity', 15, 2);
            $table->string('store');
            $table->string('product');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
