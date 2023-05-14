<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('employee');
            $table->string('subscriber_id')->unique();
            $table->integer('mrc');
            $table->string('salesType');
            $table->string('team');
            $table->string('subscriber_name');
            $table->integer('otc');
            $table->date('delivery');
            $table->string('zone');
            $table->string('offer');
            $table->integer('advance');
            $table->date('create');
            $table->string('area');
            $table->string('package');
            $table->integer('total');
            $table->date('payment');
            $table->timestamps();
            $table->softDeletes();


            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
