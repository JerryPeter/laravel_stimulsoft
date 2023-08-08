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
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('description');
            $table->integer('sort');
            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('class')->nullable();
            $table->string('baseurl');         
            $table->boolean('is_deleted')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
            $table->dateTime('deleted_at')->nullable();                    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apps');
    }
};
