<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXrelRepairsSpares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xrel_repairs_spares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('repair_id');
            $table->integer('spare_id');
            $table->integer('user_id');
            $table->integer('order_no');
            $table->text('ups_tracking_no');
            $table->date('shipped_at');
            $table->date('arrived_at');
            $table->integer('return_part_unused');
            $table->integer('return_part_doa');
            $table->text('kgb');
            $table->text('kbb');
            $table->integer('part_closed');
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
        Schema::dropIfExists('xrel_repairs_spares');
    }
}
