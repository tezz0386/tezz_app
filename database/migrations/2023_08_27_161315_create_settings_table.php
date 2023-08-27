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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->default('portfolio');
            $table->string('logo');
            
            $table->string('address');
            $table->string('contact_no_1');
            $table->string('contact_no_2')->nullable();
            $table->string('email_address_1');
            $table->string('email_address_2')->nullable();
            $table->string('email_address_3')->nullable();

            $table->string('fb_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('twiter_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('icon_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
