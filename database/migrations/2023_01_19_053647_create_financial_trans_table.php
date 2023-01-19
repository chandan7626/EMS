<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('financial_trans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moduleid');
            // $table->foreign('moduleid')->references('module_id')->on('module');
            $table->integer('tranid');
            $table->string('admno');
            $table->decimal('amount', 8, 2);
            $table->string('crdr');
            $table->date('tranDate');
            $table->string('acadYear');
            $table->integer('entrymode');
            $table->string('voucherno');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches');
            $table->string('type_of_concession')->nullable();
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
        Schema::dropIfExists('financial_trans');
    }
}
