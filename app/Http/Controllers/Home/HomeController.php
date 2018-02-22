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
      $top_silder_groups = TopSliderGroup::all();
    	$title = 'Home Controller';
    	return view('home.index', [
        'title' => $title,
        'top_silder_groups' => $top_silder_groups,
      ]);
    }
}
