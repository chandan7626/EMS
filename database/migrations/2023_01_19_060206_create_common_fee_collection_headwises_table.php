<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonFeeCollectionHeadwisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('common_fee_collection_headwise', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moduleId');
            // $table->foreign('moduleId')->references('module_id')->on('module');
            $table->unsignedBigInteger('receiptId');
            $table->foreign('receiptId')->references('id')->on('common_fee_collection');
            $table->unsignedBigInteger('headId');
            $table->foreign('headId')->references('id')->on('feetypes');
            $table->string('head_name');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches');
            $table->decimal('amount', 8, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_fee_collection_headwise');
    }
}
