<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\clubs;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->bigIncrements('club_id')->unsigned()->references('club_id')->on('membership');
           // $table->foreignId('club_id')->unsigned()->references('club_id')->on('membership');
            $table->date('establishment');
            $table->string('location');
            $table->integer('max_number');
            //$table->foreignId('club_id')->references('club_id')->on('membership');
            //$table->primary('club_id');
            $table->timestamps();
        });

        clubs::create (['establishment' => '2012-05-06', 'location' => 'Buda', 'max_number' => 250]);
        clubs::create (['establishment' => '2016-08-12', 'location' => 'Pest', 'max_number' => 350]);
        clubs::create (['establishment' => '2018-11-26', 'location' => 'Budapest', 'max_number' => 250]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubs');
    }
};
