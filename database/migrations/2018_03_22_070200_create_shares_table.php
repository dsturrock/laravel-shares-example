<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_shares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('share_instrument_name');
            $table->integer('quantity');
            $table->decimal('price', 15, 10);
            $table->decimal('total_investment', 16, 10);
            $table->integer('certificate_number');
            $table->unsignedInteger('user_id');
            $table->timestamp('transaction_date')->useCurrent();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_shares');
    }
}
