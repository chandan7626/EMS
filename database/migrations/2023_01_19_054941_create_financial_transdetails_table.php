<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialTransdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('financial_transdetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financialTranId');
            $table->foreign('financialTranId')->references('id')->on('financial_trans');
            $table->unsignedBigInteger('moduleId');
            // $table->foreign('moduleId')->references('module_id')->on('module');
            $table->decimal('amount', 8, 2);
            $table->unsignedBigInteger('headId');
            $table->foreign('headId')->references('id')->on('feetypes');
            $table->string('crdr');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches');
            $table->string('head_name');
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
        Schema::dropIfExists('financial_transdetail');
    }
}
