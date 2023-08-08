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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id');
            $table->integer('parent_id');
            $table->string('menu');
            $table->string('caption');
            $table->string('icon')->nullable()->default('default.png');
            $table->string('class')->nullable();
            $table->string('url');
            $table->string('target')->nullable()->default('_seft');              
            $table->string('report')->nullable();
            $table->integer('sort');
            $table->tinyInteger('is_sparator')->nullable()->default('0');
            $table->tinyInteger('is_deleted')->nullable()->default('0');
            $table->tinyInteger('is_active')->nullable()->default('1');
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
        Schema::dropIfExists('menus');
    }
};
