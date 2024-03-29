<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('item', 100);
            $table->integer('unit');
            $table->decimal('currnt_stck', 8, 2)->default(0);
            $table->integer('lead_time');
            $table->integer('lead_time_unit');
            $table->decimal('price_pr_unt', 8, 2);
            $table->integer('shlf_life');
            $table->decimal('sfty_stck', 8, 2);
            $table->decimal('hlding_cost', 3, 2);
            $table->integer('status_id')->default(3);
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
        Schema::dropIfExists('product');
    }
}
