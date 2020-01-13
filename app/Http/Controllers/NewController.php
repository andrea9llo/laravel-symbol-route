<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller{

  public function getFirstPage(){
    return view('firstPage');
  }

  public function getSecondPage(){
    return view('secondPage');
  }

}
