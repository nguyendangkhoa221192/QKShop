<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class TopSliderController extends Controller
{
  public function index()
  {
    $products = Product::all();
  }
}
