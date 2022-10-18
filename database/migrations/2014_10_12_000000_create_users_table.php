<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->string('email')->unique();
            //$table->primary('user_id');
            $table->timestamps();

            
        });
        
        User::create (['name' => 'Lajos', 'email' => 'lajos72@gmail.com']);
        User::create (['name' => 'Yami', 'email' => 'sárgafal@gmail.com']);
        User::create (['name' => 'Tejföl', 'email' => 'tejfel@gmail.com']);
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        
    }
};
