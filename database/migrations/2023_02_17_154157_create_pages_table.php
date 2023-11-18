<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('about_heading');
            $table->text('about_content');
            $table->boolean('about_status');
            $table->text('terms_heading');
            $table->text('terms_content');
            $table->boolean('terms_status');
            $table->text('privacy_heading');
            $table->text('privacy_content');
            $table->boolean('privacy_status');
            $table->text('contact_heading');
            $table->text('contact_map');
            $table->boolean('contact_status');
            $table->text('photo_gallery_heading');
            $table->boolean('photo_gallery_status');
            $table->text('video_gallery_heading');
            $table->boolean('video_gallery_status');
            $table->text('faq_heading');
            $table->boolean('faq_status');
            $table->text('blog_heading');
            $table->boolean('blog_status');
            $table->text('cart_heading');
            $table->boolean('cart_status');
            $table->text('checkout_heading');
            $table->boolean('checkout_status');
            $table->text('payment_heading');
            $table->text('signup_heading');
            $table->boolean('signup_status');
            $table->text('signin_heading');
            $table->boolean('signin_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
