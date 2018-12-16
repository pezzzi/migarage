<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private function getProfile()
    {
      return [
        'fullname' => \Auth::user()->fullname,
        'username' => \Auth::user()->username,
        'phone' => \Auth::user()->phone,
        'birthdate' => \Auth::user()->birthdate,
        'address' => \Auth::user()->address,
        'country_code' => \Auth::user()->country_code,
        'email' => \Auth::user()->email,
        'avatar' => 'http://lorempixel.com/400/400'
      ];
    }

    public function profile()
    {
      return view('profile',  $this->getProfile());
    }
}
