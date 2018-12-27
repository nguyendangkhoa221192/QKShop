<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    protected $data = [];

    const ST_SUCCESS = 1;
    const ST_FAIL    = 0;
    const KEY_STATUS = 'status';
    const KEY_DATA   = 'data';
    const KEY_ERR    = 'err';

    public function __construct()
    {
        $this->data[self::KEY_STATUS] = self::ST_FAIL;
        $this->data[self::KEY_DATA]   = [];
        $this->data[self::KEY_ERR]    = [];
    }
}
