<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('domain');
            $table->string('key');
            $table->unsignedInteger('satis_authentication_count')->default(0);
            $table->timestamps();
        });
    }
}
