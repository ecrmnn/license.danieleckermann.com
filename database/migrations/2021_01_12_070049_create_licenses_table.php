<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('activation_key');
            $table->string('license_key')->nullable();
            $table->boolean('active')->default(false);
            $table->foreignId('user_id')->constrained();
            $table->unsignedInteger('satis_authentication_count')->default(0);
            $table->timestamp('purchased_at')->nullable();
            $table->timestamps();
        });
    }
};
