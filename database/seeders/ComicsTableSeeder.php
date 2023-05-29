<?php

namespace Database\Seeders;

use App\Models\Comic;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newComic = new Comic();
            $newComic->title = $faker->name;
            $newComic->description = $faker->sentence(5);
            $newComic->thumb = $faker->imageUrl(500, 500, 'hero', true, 'comic');
            $newComic->price = $faker->randomFloat(2, 1, 30);
            $newComic->series = $faker->word();
            $newComic->sale_date = $faker->date();
            $newComic->Type = $faker->word();
            $newComic->save();
        }
    }
}
