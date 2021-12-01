<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
  public function getData()
  {
      return ['name'=>'zahid', 'email'=>'zahid@example.com', 'address'=>'223142'];
  }
}
