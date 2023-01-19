<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonFeeCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('common_fee_collection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('moduleId');
            // $table->foreign('moduleId')->references('module_id')->on('module');
            $table->integer('transId');
            $table->string('admno');
            $table->string('rollno');
            $table->decimal('amount', 8, 2);
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches');
            $table->string('acadamicYear');
            $table->string('financialYear');
            $table->string('displayReceiptNo');
            $table->string('entrymode');
            $table->date('paidDate');
            $table->enum('inactive', [0, 1]);
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
        Schema::dropIfExists('common_fee_collection');
    }
}
