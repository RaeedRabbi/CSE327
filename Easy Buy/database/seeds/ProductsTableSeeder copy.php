<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 14)->create()->each(function($u) {
            $u->reviews()->save(factory(App\Review::class)->create());
            $u->colors()->save(factory(App\Color::class)->create());
        });
    }
}
