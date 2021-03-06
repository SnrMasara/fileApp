<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('invoiceno');
                $table->string('stockcode');
                $table->text('description');
                $table->decimal('quantity');
                $table->string('invoicedate');
                $table->float('unitprice');
                $table->string('customerid');
                $table->text('country');
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
        Schema::dropIfExists('makes');
    }
}
