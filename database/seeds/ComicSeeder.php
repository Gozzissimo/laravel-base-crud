<?php

use Faker\Generator as Faker;
use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newComic = new Comic();
            $newComic->isbn = $faker->isbn13();
            $newComic->title = $faker->words(3, true);
            $newComic->number = $faker->randomNumber(5, false);
            $newComic->author = $faker->words(2, true);
            $newComic->format = $faker->word();
            $newComic->publisher = $faker->words(4, true);
            $newComic->edition = $faker->word();
            $newComic->language = $faker->languageCode();
            $newComic->pages = $faker->randomNumber(3, false);
            $newComic->price = $faker->randomFloat(2, 1, 100);

            $newComic->save();
        }
    }
}
