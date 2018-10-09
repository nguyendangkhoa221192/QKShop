<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  const TIME_FORMAT = 'Y-m-d H:i:s';
  private $time_now;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->time_now = now()->format(self::TIME_FORMAT);
      $this->createDataBrand();
      $this->createDataProduct();
      $this->createDataProductArrival();
      $this->createDataTop_Slider_g();
      $this->createDataTop_Slider();
      $this->createDataBill();
      $this->createDataBillDetail();
      $this->createDataTypeProduct();
      $this->createDataTypePayment();
      $this->createDataTypeUser();
    }

    private function createDataTypeUser() {
        DB::table('user_types')->insert([
          "name" => "Admination",
          "description" => "Description 1",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('user_types')->insert([
          "name" => "Manager Order",
          "description" => "Description 2",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('user_types')->insert([
          "name" => "Customer",
          "description" => "Description 3",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
    }

    private function createDataTypeProduct() {
        DB::table('product_categories')->insert([
          "name" => "Men",
          "description" => "Description 1",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('product_categories')->insert([
          "name" => "Women",
          "description" => "Description 2",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('product_categories')->insert([
          "name" => "Free Type",
          "description" => "Description 3",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
    }

    private function createDataTypePayment() {
        DB::table('payment_types')->insert([
          "name" => "COD",
          "description" => "Description 1",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('payment_types')->insert([
          "name" => "Paypal",
          "description" => "Description 2",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        DB::table('payment_types')->insert([
          "name" => "Card",
          "description" => "Description 3",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
    }

    private function createDataBillDetail() {
      for ($i = 1; $i <= 10; $i++) {
        $int= mt_rand(1262055681,1562055681);
        DB::table('bill_detail')->insert([
          "id_bill" => rand(1, 10),
          "id_product" => rand(1, 40),
          "quantity" => $i*(rand(1, 10)),
          "unit_price" => rand(1, 5000),
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }

    private function createDataBill() {
      for ($i = 1; $i <= 10; $i++) {
        $int= mt_rand(1262055681,1562055681);
        DB::table('bills')->insert([
          "id_user" => 1,
          "date_order" => date("Y-m-d H:i:s", $int),
          "total_price" => $i*100,
          "id_payment" => rand(1, 3),
          "note" => "Note " . $i,
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }

    private function createDataBrand() {
      for ($i = 1; $i <= 12; $i++) {
        DB::table('brands')->insert([
          "name_brand" => "Brand " . $i,
          "image_url" => "images/brands/" . $i . ".jpg",
          "description" => "description " . $i,
          "home_page_url" => "http://",
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }
    
    private function createDataProduct() {
      for ($i = 1; $i <= 24; $i++) {
        $img = rand(1, 6);
        DB::table('products')->insert([
          "product_name" => "Product " . $i,
          "product_price" => $i*10,
          "image_url" => "images/tovar/women/" . $img . ".jpg;images/tovar/women/" . $img . "_2.jpg",
          "type_id" => rand(1, 3),
          "product_category_id" => 1,
          "product_quantity" => $i,
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }
    
    private function createDataProductArrival() {
      for ($i = 1; $i <= 16; $i++) {
        DB::table('products')->insert([
          "product_name" => "Arrivals " . $i,
          "product_price" => $i*10,
          "image_url" => "images/tovar/women/new/" . rand(1, 6) . ".jpg",
          "type_id" => rand(1, 3),
          "product_category_id" => 2,
          "product_quantity" => $i,
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }

    private function createDataTop_Slider_g() {
      for ($i = 1; $i <= 3; $i++) {
        DB::table('top_slider_groups')->insert([
          "title_silder_item_above" => "Slider_Item_Title above",
          "title_silder_item_below" => "Slider_Item_Title below",
          "image_url" => "images/slider/woman_bg" . $i . ".jpg",
          "redirect_url" => $i,
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
      }
    }

    private function createDataTop_Slider() {
      // Create data for slider group table
      $temp = 1;
      $category = 1;
      for ($i = 1; $i <= 9; $i++) {
        DB::table('top_sliders')->insert([
          "image_url" => "images/slider/slide1_baner" . $temp . ".jpg",
          "top_slider_groups_id" => $category,
          "redirect_url" => $i,
          'created_by'  => 'khoand',
          'created_at'  => $this->time_now
        ]);
        if ($temp == 3) {
          $temp = 1;
          $category++;
        } else {
          $temp++;
        }
      }
    }
}
