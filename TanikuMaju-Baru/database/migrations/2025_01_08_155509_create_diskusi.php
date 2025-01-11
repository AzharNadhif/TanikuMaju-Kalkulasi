<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('diskusi', function (Blueprint $table) {
            $table->id('id_diskusi');
            $table->string('topik');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diskusi');
    }
};



