<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
  public function login()
  {
  return view ('admin.auth.login');
  }
  public function index()
  {
    return view ('admin.pages.index');
  }
  public function product_create()
  {
  return view ('admin.pages.product_create');
  }
}
