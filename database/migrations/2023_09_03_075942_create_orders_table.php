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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('phonenumber');
            $table->string('deliverylocation');
            $table->string('pname');
            $table->bigInteger('pquantity');
            $table->bigInteger('pprice');
            $table->date('edeliverydate');
            $table->bigInteger('orderstat')->default(0);
            $table->foreignId('employeeid');
            $table->foreign('employeeid',)->references('id')->on('employees')->cascadeOnDelete();
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
        Schema::dropIfExists('orders');
    }
};
