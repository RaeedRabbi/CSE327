<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 5)->create()->each(function($u) {
            $u->subcategories()->save(factory(App\SubCategory::class)->create());
            $u->products()->save(factory(App\Product::class)->create());
        });
    }
}
