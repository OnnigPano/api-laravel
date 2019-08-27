<?php

use App\User;
use App\Brand;
use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(10)->create();
      $products = factory(Product::class)->times(10)->create();
      $brands = factory(Brand::class)->times(8)->create();
      $categories = factory(Category::class)->times(10)->create();
     
      // foreach ($products as  $product) {
      //   $product->category()->associate($categories->random(1)->first()->id);
      //   $product->brand()->associate($brands->random(1)->first()->id);
      //   $product->save();
      // }
  
      // foreach ($brands as $brand) {
      //   $brand->categories()->sync($categories->random(3));
      // }

    }
}
