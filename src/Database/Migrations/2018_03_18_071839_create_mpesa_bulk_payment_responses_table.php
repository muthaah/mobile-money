<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpesaBulkPaymentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_bulk_payment_responses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('ResultType');
            $table->smallInteger('ResultCode');
            $table->string('ResultDesc');
            $table->string('OriginatorConversationID');
            $table->string('ConversationID');
            $table->string('TransactionID');
            $table->double('TransactionAmount', 10, 2)->nullable();
            $table->string('ReceiverPartyPublicName')->nullable();
            $table->string('TransactionCompletedDateTim')->nullable();
            $table->double('B2CUtilityAccountAvailableFunds', 10, 2)->nullable();
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
        Schema::dropIfExists('mpesa_bulk_payment_responses');
    }
}
