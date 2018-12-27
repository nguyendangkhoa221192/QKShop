<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    public function __construct()
    {
    	parent::__construct();
    }
}
