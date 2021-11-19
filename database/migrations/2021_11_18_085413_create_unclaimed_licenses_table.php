<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('unclaimed_licenses', function (Blueprint $table) {
            $table->id();
            $table->string('stripe_id');
            $table->string('name');
            $table->string('email');
            $table->string('key');
            $table->timestamps();
        });
    }
};
