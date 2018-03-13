<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TopSlider\TopSliderGroup;
use App\Model\TopSlider\TopSlider;
use App\Model\Product;
use App\Model\Brand;

class HomeController extends Controller
{
    public function index()
    {
      $top_silder_groups = TopSliderGroup::all();
      $featureds = Product::where('product_category_id' , 1)->get();
      $arrivals = Product::where('product_category_id' , 2)->get();
      $brands = Brand::all();
      
    	$title = 'Home Controller';
      
    	return view('home.index', [
        'title' => $title,
        'top_silder_groups' => $top_silder_groups,
        'featureds' => $featureds,
        'arrivals' => $arrivals,
        'brands' => $brands,
      ]);
    }
}
