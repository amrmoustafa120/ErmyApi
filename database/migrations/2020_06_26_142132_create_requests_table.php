<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('worker_id')->unsigned()->nullable();
            $table->integer('coins')->unsigned()->nullable();
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->boolean('is_coins_for_user');
            $table->integer('state_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('worker_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('request_states')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
