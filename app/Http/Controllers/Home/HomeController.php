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
    $this->recurse_copy('views', 'taget');
    dd();
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

  public function recurse_copy($src,$dst) { 
    $dir = opendir($src);
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 
}
