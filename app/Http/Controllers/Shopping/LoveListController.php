<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use Cart;
use Config;

class LoveListController extends Controller
{
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
