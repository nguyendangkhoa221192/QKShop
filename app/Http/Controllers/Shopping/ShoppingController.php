<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use Cart;
use Config;

class ShoppingController extends Controller
{
	public function buyProduct(Request $request)
	{
		if ($request->ajax()) {
			$result['isSuccess'] = false;
			if ($request->has('id_product')) {
				$product = Product::find($request->input('id_product'));
				if (is_null($product)) {
					$result['isSuccess'] = false;
				} else {
					$shopping_bag = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'));
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
			$shopping_bag = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'));

			$title = 'Shopping Bag';
			return view('shopping.shopping_bag', [
				'title' => $title,
				'shopping_bag' => $shopping_bag,
			]);
		}
	}

	public function updateQtyProduct(Request $request)
	{
		if ($request->ajax() && $request->has('data')) {
			$data = $request->data.split('|');
			
			$result['total'] = $shopping_bag->total();
			$result['subtotal'] = $shopping_bag->subtotal();
		}
	}

	public function removeProduct(Request $request)
	{
		if ($request->ajax() && $request->has('rowid')) {
			$shopping_bag = Cart::instance(Config::get('constants.home.SHOPPING_BAG', 'shopping'));
			$shopping_bag->remove($request->rowid);
			$result['isSuccess'] = true;
			$result['total'] = $shopping_bag->total();
			$result['subtotal'] = $shopping_bag->subtotal();
			return response()->json($result);
		}
	}
}
