<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Model\Product;
use Cart;

class LoveListController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(Request $request)
    {
        $this->data['title']    = 'Love List';
        $this->data['lovelist'] = Cart::instance(LOVE_LIST_BAG);
        return view('shopping.love_list', $this->data);
    }

    public function lovelist(Request $request)
    {
        $result['isSuccess'] = false;
        if ($request->has('id_product')) {
            $product = Product::find($request->input('id_product'));
            if (is_null($product)) {
                $result['isSuccess'] = false;
            } else {
                $lovelist = Cart::instance(LOVE_LIST_BAG);
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
        } else {
            $result['isSuccess'] = false;
        }
        return response()->json($result);
    }
}
