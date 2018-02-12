<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TopSlider\TopSliderGroup;
use App\Model\TopSlider\TopSlider;

class HomeController extends Controller
{
    public function index()
    {
      $top_silder = TopSliderGroup::find(1)->top_silders();
      // $top_silder = TopSliderGroup::all();
      $top = TopSlider::all();
    	$title = 'Home Controller';
      
      dd($top_silder);
      // $top_silder = null;
    	return view('home.index', [
        'title' => $title,
        'top_silder' => $top_silder,
      ]);
    }
}
