<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminPagesController extends Controller
{
  public function x()
  {
  return view ('admin.pages.x');
  }

  public function login()
  {
  return view ('admin.auth.login');
  }
  
  public function index()
  {
    return view ('admin.pages.index');
  }

  }

