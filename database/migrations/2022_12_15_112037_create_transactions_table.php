<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("trans_nota",50);
            $table->dateTime("trans_tgl");
            $table->integer("trans_user_id");
            $table->integer("trans_cus_id");
            $table->string("trans_mj_no",10);
            $table->integer("trans_diskon")->nullable();
            $table->integer("trans_ppn");
            $table->integer("trans_gtotal");
            $table->integer("status")->default(1);
            $table->timestamps();
            $table->index("trans_user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
