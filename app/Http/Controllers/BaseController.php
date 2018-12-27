<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TopSlider\TopSliderGroup;
use App\Model\TopSlider\TopSlider;
use App\Model\Product;
use App\Model\Brand;

class BaseController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $top_silder_groups = TopSliderGroup::all();
        $featureds         = Product::where('category_id' , 1)->get();
        $arrivals          = Product::where('category_id' , 2)->get();
        $brands            = Brand::all();
        $this->data['title']             = "Base Controller";
        $this->data['top_silder_groups'] = $top_silder_groups;
        $this->data['featureds']         = $featureds;
        $this->data['arrivals']          = $arrivals;
        $this->data['brands']            = $brands;
    }
}
