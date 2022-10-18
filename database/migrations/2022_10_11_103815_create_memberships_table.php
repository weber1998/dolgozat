<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\membership;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->bigInteger('club_id')->unsigned();
            $table->foreignId('user_id')->unsigned()->references('user_id')->on('users');
            //$table->foreign('user_id')->references('user_id')->on('users');
            $table->primary(['club_id','user_id']);
            $table->timestamps();
        });

        membership::create (['club_id' => 1, 'user_id' => 1]);
        membership::create (['club_id' => 2, 'user_id' => 2]);
        membership::create (['club_id' => 3, 'user_id' => 3]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
};
