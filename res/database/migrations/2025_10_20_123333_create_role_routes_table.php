<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// database/migrations/xxxx_xx_xx_create_role_routes_table.php


return new class extends Migration {
    public function up() {
        Schema::create('role_routes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->string('route_name'); // store named route
            $table->timestamps();

            $table->unique(['role_id', 'route_name']);
        });
    }
    public function down() {
        Schema::dropIfExists('role_routes');
    }
};

