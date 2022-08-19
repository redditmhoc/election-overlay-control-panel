<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('groupings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('colour')->default('#3b3b3b');
            $table->string('text_colour')->default('#fff');
            $table->integer('seats');
            $table->integer('previous_seats')->nullable();
            $table->integer('votes');
            $table->double('vote_share');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groupings');
    }
};
