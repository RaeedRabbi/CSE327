<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SubCategory::class, 5)->create()->each(function($u) {
            $u->products()->save(factory(App\Product::class)->create());
        });
    }
}
