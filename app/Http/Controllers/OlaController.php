<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{

  public function ola(){
    return view('hello');
  }
}
