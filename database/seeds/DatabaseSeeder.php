<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // for ($i=1; $i < 10; $i++) {
        //   DB::table('products')->insert([
        //     "productName" => "Product ".$i,
        //     "productPrice" => $i,
        //     "imageUrl" => $i,
        //     "productCategoryId" => $i,
        //     "productQuantity" => 10
        //   ]);
        // }
        
        // Create data for slider group table
        for ($i = 1; $i <= 3; $i++) {
          DB::table('top_slider_groups')->insert([
            "titleSilderItem" => "Slider_Item_Title " . $i,
            "imageUrl" => "images/slider/woman_bg" . $i . ".jpg",
            "redirectUrl" => $i,
          ]);
        }
        
        // Create data for slider group table
        $temp = 1;
        for ($i = 1; $i <= 9; $i++) {
          DB::table('top_sliders')->insert([
            "imageUrl" => "images/slider/slide1_baner" . $temp . ".jpg",
            "top_slider_groups_id" => $temp,
            "redirectUrl" => $i,
          ]);
          if ($temp == 3) {
            $temp = 1;
          } else {
            $temp++;
          }
        }
    }
}
