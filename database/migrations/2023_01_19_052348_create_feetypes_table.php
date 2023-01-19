<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('feetypes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fee_category');
            $table->foreign('fee_category')->references('id')->on('feecategory');
            $table->string('f_name');
            $table->unsignedBigInteger('collection_id');
            $table->foreign('collection_id')->references('id')->on('feecollectiontype');
            $table->unsignedBigInteger('br_id');
            $table->foreign('br_id')->references('id')->on('branches');
            $table->integer('seq_id');
            $table->string('fee_type_ledger');
            $table->unsignedBigInteger('fee_headtype');
            // $table->foreign('fee_headtype')->references('module_id')->on('module');
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
        Schema::dropIfExists('feetypes');
    }
}
