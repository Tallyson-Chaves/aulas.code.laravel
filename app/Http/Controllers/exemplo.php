<?php

namespace App2Siga\Http\Controllers;

use Illuminate\Http\Request;

use App2Siga\Http\Requests;
use App2Siga\Http\Controllers\Controller;

class exemplo extends Controller
{
   
    public function index()
    {
        return view('exemplo');
    }

}
