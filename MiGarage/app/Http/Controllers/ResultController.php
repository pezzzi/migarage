<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{

    private function getMockProduct()
    {
      return  [
        'id' => 1,
        'title' => 'Título de prueba',
        'location' => 'CABA',
        'picture' => 'http://lorempixel.com/400/300',
        'garagetype' => 'autos',
        'size' => 20,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'rentType' => 'mensual',
        'price' => 1500
      ];
    }

    private function getList()
    {

      $results = [];

      for ($i=0; $i < 10; $i++) {
          array_push($results, $this->getMockProduct());
      }

      return $results;
    }

    private function getDetail()
    {
      return $this->getMockProduct();
    }

    public function index()
    {
      return view('search',  ['results' => $this->getList()]);
    }

    public function detail()
    {
      return view('detail',   $this->getDetail());
    }
}
