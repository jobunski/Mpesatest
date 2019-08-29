<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpesaOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('TransactionType');
            $table->text('TransID');
            $table->text('TransTime ');
            $table->double('TransAmount');
            $table->text('BusinessShortCode');
            $table->text('BillRefNumber');
            $table->text('InvoiceNumber');
            $table->text('ThirdPartyTransID');
            $table->text('MSISDN');
            $table->text('FirstName ');
            $table->text('LastName');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesa_orders');
    }
}
