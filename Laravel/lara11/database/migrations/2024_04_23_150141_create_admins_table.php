<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("role_id");
            $table->string("name")->nullable();
            $table->string("email")->unique();
            $table->boolean("active")->default(true);
            $table->longText("des");
            $table->text("bio");

            // $table->foreign('role_id')
            // ->references('id')
            // ->on('roles')
            // ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
