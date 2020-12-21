<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('url_ig');
            $table->text('description');
            $table->string('country_audience');
            $table->string('language');
            $table->boolean('advertisement_notice')->default(0);
            $table->string('image');
            $table->string('category_redSocial');
            $table->string('start_vacation');
            $table->string('end_vacation');
            $table->boolean('photo_ig')->nullable();
            $table->boolean('video_ig')->nullable();
            $table->boolean('story_ig')->nullable();
            $table->string('price_photo_ig', 5)->nullable();
            $table->string('price_video_ig', 5)->nullable();
            $table->string('price_story_ig', 5)->nullable();
            $table->string('discount_photo_ig', 3)->nullable();
            $table->string('discount_video_ig', 3)->nullable();
            $table->string('discount_story_ig', 3)->nullable();
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
        Schema::dropIfExists('influencers');
    }
}
