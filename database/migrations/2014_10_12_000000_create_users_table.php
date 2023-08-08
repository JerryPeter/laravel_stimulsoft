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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname');    
            $table->string('lastname');
            $table->string('fullname');      
            $table->string('employee_nik');
            $table->boolean('is_login');                                                             
            $table->boolean('is_deleted')->nullable();
            $table->boolean('is_active')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
            $table->dateTime('deleted_at')->nullable();   
            $table->string('lastlogin_ip')->nullable();
            $table->dateTime('lastlogin_at')->nullable();               
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
