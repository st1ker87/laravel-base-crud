<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /* public function run()
    {
        $dresses = config('dresses');

        foreach ($dresses as $dress) {
            $newDress = new Dress();

            $newDress->name = $dress['name'];
            $newDress->brand = $dress['brand'];
            $newDress->size = $dress['size'];
            $newDress->color = $dress['color'];
            $newDress->price = $dress['price'];
            $newDress->description = $dress['description'];
            $newDress->season = $dress['season'];
            $newDress->img_path = $dress['img_path'];

            $newDress->save();
        }
    } */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) {
            $newDress = new Dress();

            $newDress->name = $faker->name();
            $newDress->brand = $faker->RandomElement(['nike', 'adidas', 'puma']);
            $newDress->size = $faker->RandomElement(['XS', 'S', 'M', 'L', 'XL', 'XXL']);
            $newDress->color = $faker->safeColorName();
            $newDress->price = $faker->randomFloat(2, 1, 5000);
            $newDress->description = $faker->sentence();
            $newDress->season = $faker->RandomElement(['primaverile', 'estiva', 'autunnale', 'invernale']);
            $newDress->img_path = $faker->imageUrl(640, 480, 'animals', true);

            $newDress->save();
        }
    }
}
