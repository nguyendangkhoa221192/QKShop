<?php

namespace App\Http\Controllers\Shopping;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Model\Product;
use Cart;
use Config;

class ShoppingController extends BaseController
{
    private $shopping_bag;

    public function __construct()
    {
        parent::__construct();
        $this->shopping_bag = Cart::instance(SHOPPING_BAG);
    }

    public function index(Request $request)
    {
        $this->data['title']        = 'Shopping Bag';
        $this->data['shopping_bag'] = $this->shopping_bag;
        return view('shopping.shopping_bag', $this->data);
    }

    public function buyProduct(Request $request)
    {
        $result['isSuccess'] = false;
        if ($request->has('id_product')) {
            $product = Product::find($request->input('id_product'));
            if (is_null($product)) {
                $result['isSuccess'] = false;
            } else {
                $image = explode(";", $product->image_url);
                $this->shopping_bag->add([
                    'id' => $product->id,
                    'name' => $product->product_name,
                    'qty' => 1,
                    'price' => $product->product_price,
                    'options' => ['img' => $image[0]]
                ]);

                $result['isSuccess'] = true;
                $result['count'] = $this->shopping_bag->count();
            }
        }
        return response()->json($result);
    }

    public function updateQtyProduct(Request $request)
    {
        $result = [];
        if (!$request->ajax()
            || !$request->has('quantity')
            || !$request->has('rowId')) {
            return response()->json($result);
        }
        $this->shopping_bag->update($rowId, $request->has('quantity'));
        $result['shopping_bag'] = $this->shopping_bag;
        return response()->json($result);
    }

    public function removeProduct(Request $request)
    {
        $result['isSuccess'] = false;
        if (!$request->ajax()
            || !$request->has('rowid')) {
            return response()->json($result);
        }
        $this->shopping_bag->remove($request->rowid);
        $result['isSuccess'] = true;
        $result['total']     = $this->shopping_bag->total();
        $result['subtotal']  = $this->shopping_bag->subtotal();
        return response()->json($result);
    }
}
