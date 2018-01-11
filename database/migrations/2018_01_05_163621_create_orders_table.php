<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('device_id');
            $table->integer('brand_id');
            $table->integer('status_id');
            $table->integer('manager_id');
            $table->integer('master_id');
            $table->integer('pay_id');
            $table->integer('media_id');
            $table->integer('help_id');
            $table->text('defect');
            $table->text('complit');
            $table->string('model', 250);
            $table->string('sn', 250);
            $table->integer('price');
            $table->integer('ticket');
            $table->integer('trash');
            $table->integer('archive');
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
}
