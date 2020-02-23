<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
  // 以下を追記
  public function add()
   {
      return view('create');
   }
  
  public function create()
   {
        return redirect('create');
   }

}