<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	$title = 'Home Controller';
      $top_silder = null;
    	return view('home.index', [
        'title' => $title,
        'top_silder' => $top_silder,
      ]);
    }
}
