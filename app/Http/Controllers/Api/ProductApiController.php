<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseApiController as Controller;

class ProductApiController extends Controller
{
    private $product_api_ser;

    public function __construct()
    {
        parent::__construct();
        $this->product_api_ser = getService(PRODUCT_API_SERVICE);
    }

    public function findProductByBarcode(Request $request)
    {
        if ($request->has('barcode')) {
            $this->data[self::KEY_STATUS] = self::ST_SUCCESS;
            $this->data[self::KEY_DATA]   = $this->product_api_ser->findProductByBarcode($request->barcode);
        }
        $this->data[self::KEY_ERR] = [__('err_msg.ERROR_API_01001')];

        return response()->json($this->data);
    }
}
