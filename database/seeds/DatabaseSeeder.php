<?php

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
        $users = factory(User::class)->times(40)->create();
      $products = factory(Product::class)->times(40)->create();
      $brands = factory(Brand::class)->times(8)->create();
      $categories = factory(Category::class)->times(10)->create();
     

      DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'dhadmin@gmail.com',
            'password' => bcrypt('DH123456'),
            'last_name' => "Admin",
            'nickname' => "Admin",
            'avatar' => "foto.jpg",
            'country' => "Argentina",
            'city' => "Ciudad Autónoma de Buenos Aires",
            'admin' => 1,
        ]);
      foreach ($products as  $product) {
        $product->category()->associate($categories->random(1)->first()->id);
        $product->brand()->associate($brands->random(1)->first()->id);
        $product->save();
      }
  
      foreach ($brands as $brand) {
        $brand->categories()->sync($categories->random(3));
      }

    }
}
