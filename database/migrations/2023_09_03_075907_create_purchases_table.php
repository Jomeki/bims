<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('customerphone');
            $table->foreignId('pid');
            $table->foreign('pid')->references('id')->on('products');
            $table->bigInteger('pprice');
            $table->bigInteger('quantity');
            $table->foreignId('eid');
            $table->foreign('eid')->references('id')->on('employees');
            $table->float('amountpaid');
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
        Schema::dropIfExists('purchases');
    }
};
