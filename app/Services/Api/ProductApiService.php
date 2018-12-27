<?php

namespace App\Services\Api;

use App\Model\Product;

class ProductApiService
{
    public function findProductByBarcode($barcode)
    {
        $product = Product::where('barcode', $barcode)->limit(1)->get();
        return $product;
    }
}
