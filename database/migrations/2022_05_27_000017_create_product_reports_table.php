<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReportsTable extends Migration
{
    public function up()
    {
        Schema::create('product_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product')->unique();
            $table->float('stock', 15, 2)->nullable();
            $table->decimal('unit_price', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
