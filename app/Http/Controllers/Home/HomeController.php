<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TopSlider\TopSliderGroup;
use App\Model\TopSlider\TopSlider;
use App\Model\Product;
use App\Model\Brand;
use Cart;
use Config;

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

  public function buyProduct(Request $request)
  {
    if ($request->ajax()) {
      $result['isSuccess'] = false;
      if ($request->has('id_product')) {
        $product = Product::find($request->input('id_product'));
        if (is_null($product)) {
          $result['isSuccess'] = false;
        } else {
          // Cart::destroy();
          $shopping_bag = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'));
          // $shopping_bag->destroy();
          $image = explode(";", $product->image_url);
          $shopping_bag->add([
            'id' => $product->id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $product->product_price,
            'options' => ['img' => $image[0]]
          ]);

          $result['isSuccess'] = true;
          $result['count'] = $shopping_bag->count();
        }
      }
      return response()->json($result);
    } else {
      $title = 'Shopping Bag';
      return view('shopping.shopping_bag', [
        'title' => $title,
      ]);
    }
  }

  public function lovelist(Request $request)
  {
    if ($request->ajax()) {
      $result['isSuccess'] = false;
      if ($request->has('id_product')) {
        $product = Product::find($request->input('id_product'));
        if (is_null($product)) {
          $result['isSuccess'] = false;
        } else {
          $lovelist = Cart::instance(Config::get('constants.home.LOVE_LIST_BAG', 'lovelist'));

          $image = explode(";", $product->image_url);
          $lovelist->add([
            'id' => $product->id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $product->product_price,
            'options' => ['img' => $image[0]]
          ]);

          $result['isSuccess'] = true;
          $result['count'] = $lovelist->count();
        }
      }
    } else {
      $title = 'Love List';
      return view('shopping.love_list', [
        'title' => $title,
      ]);
    }
  }
}
