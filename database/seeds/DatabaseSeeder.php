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
        for ($i=1; $i < 10; $i++) {
          DB::table('products')->insert([
            "productId" => "id_".$i,
            "productName" => "Product ".$i,
            "productPrice" => $i,
            "productImageUrl" => "Url ".$i,
            "productCategoryId" => $i,
            "productQuantity" => 10
          ]);
        }
    }
}
