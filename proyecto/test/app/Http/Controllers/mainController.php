<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{


  public function index(){

     return view('index');

  }

  public function registration() {
    return view('registration');
  }

}
