<?php

// database/migrations/xxxx_xx_xx_create_designs_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->text('html');
            $table->text('css');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('designs');
    }
}
