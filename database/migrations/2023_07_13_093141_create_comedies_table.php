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
        Schema::create('comedies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('script');
            $table->foreignId('comedian_id')->constrained();
            $table->string('year', 10);
            $table->string('rank', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comedies');
    }
};
