<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model {
    use HasFactory;

    protected $fillable = [ 'name', 'email', 'url_ig', 'description', 'country_audience', 'language', 'advertisement_notice', 'image', 'category_redSocial', 'start_vacation', 'end_vacation', 'photo_ig', 'video_ig', 'story_ig', 'price_photo_ig', 'price_video_ig', 'price_story_ig', 'discount_photo_ig', 'discount_video_ig', 'discount_story_ig'];
}