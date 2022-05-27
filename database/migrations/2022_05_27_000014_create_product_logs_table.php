<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLogsTable extends Migration
{
    public function up()
    {
        Schema::create('product_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sku');
            $table->string('status');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->decimal('unit_price', 15, 2);
            $table->float('weight', 15, 2)->nullable();
            $table->date('due_date')->nullable();
            $table->datetime('production_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
