<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('satametria');
            $table->float('sataviiskytmetria');
            $table->float('kakssataametria');
            $table->float('kolmesataametria');
            $table->float('neljasataametria');
            $table->float('kuusikymmentametriaaita');
            $table->float('kahdeksankymmentametriaaita');
            $table->float('satametriaaita');
            $table->float('kaksisataametriaaita');
            $table->float('kuussataametria');
            $table->float('kahdeksansataametria');
            $table->float('tuhatmetria');
            $table->float('tuhatviisisataametria');
            $table->float('kaksituhattametria');
            $table->float('kolmetuhattametria');
            $table->float('korkeushyppy');
            $table->float('seivas');
            $table->float('pituus');
            $table->float('kolmiloikka');
            $table->float('kuula');
            $table->float('kiekko');
            $table->float('moukari');
            $table->float('keihas');
            $table->float('pallo');
            $table->float('taso');
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
        Schema::dropIfExists('results');
    }
}
