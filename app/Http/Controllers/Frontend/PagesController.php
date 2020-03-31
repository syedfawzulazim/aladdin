<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
      return view('user.pages.index');
    }
    
    
}
