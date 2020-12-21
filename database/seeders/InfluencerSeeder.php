<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Influencer;
use File;



class InfluencerSeeder extends Seeder{
 
    public function run(){

        $faker = Faker::create();
        $path = public_path('/storage');

        if (!File::exists($path)){
            File::makeDirectory($path);
        }


        foreach (range(1,15) as $index) {
    
            Influencer::create([
                'name' => $faker->firstName($gender = 'male'|'female'),
                'email' => $faker->unique()->email(),
                'url_facebook' => $faker->url,
                'description' => $faker->text,
                'country_audience' => $faker->country,
                'language' => $faker->country,
                'advertisement_notice' => $faker->boolean,
                'image' => $faker->image($path,300,200, 'people', false),
                'category_redSocial' => $faker->randomElement(['Belleza', 'Deportes', 'Animales', 'Fotografia y diseño', 'Diarios']),
                'start_vacation' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'end_vacation' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'service'=> $faker->randomElement(['photo_ig', 'video_ig', 'story_ig']),
                'price'=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max=2),
                'discount_promotion'=> $faker->numberBetween($min = 1, $max = 100) ,
            ]);
        }
    }
}        