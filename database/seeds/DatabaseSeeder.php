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
      // $this->createDataProduct();
      $this->createDataProductArrival();
    }
    
    private function createDataProduct() {
      for ($i = 1; $i <= 6; $i++) {
        DB::table('products')->insert([
          "productName" => "Product " . $i,
          "productPrice" => $i*10,
          "imageUrl" => "images/tovar/women/" . $i . ".jpg;images/tovar/women/" . $i . "_2.jpg",
          "productCategoryId" => $i,
          "productQuantity" => $i,
        ]);
      }
    }
    
    private function createDataProductArrival() {
      for ($i = 1; $i <= 6; $i++) {
        DB::table('products')->insert([
          "productName" => "Arrivals " . $i,
          "productPrice" => $i*10,
          "imageUrl" => "images/tovar/women/new/" . rand(1, 6) . ".jpg",
          "productCategoryId" => 2,
          "productQuantity" => $i,
        ]);
      }
    }
    
    private function test() {
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
