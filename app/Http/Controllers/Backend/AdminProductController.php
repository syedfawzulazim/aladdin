<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminProductController extends Controller
{
 

  public function create()
  {
    $products = Product::orderBy('id')->get();
    return view ('admin.pages.product_create')->with('products', $products);
  }

  public function store(Request $request)
  {

    $request->validate([

      'category' => 'required|max:150',
      'brand' => 'required|max:150',
      'title' => 'required|max:150',
      'description' => 'required',
      'price' => 'required|max:150',
      'quantity' => 'required|max:150',
      'offer_price' => 'required|max:150',

    ]);


    $product = new Product;

    $product->category_id = $request->category ; 
    $product->brand_id = $request->brand ;
    $product->title = $request->title ;
    $product->slug = str_slug ($request->title) ;
    $product->description = $request->description ;
    $product-> price= $request->price ;
    $product->quantity = $request->quantity ;
    $product->offer_price = $request->offer_price ;
    $product->admin_id=2;
    $product-> save() ;

    // if ($request->hasFile('product_image')) {
      
    //   $image = $request->file('product_image');
    //   $imageName = time().'.'.$image->getClientOriginalExtension();
    //   $image->move(public_path('backend/images/product'), $imageName); 

    //   $product_image = new ProductImage;
    //   $product_image->product_id = $product->id;
    //   $product_image->image = $imageName;
    //   $product_image->save();



      if (($request->product_image)>0) {
        foreach ($request->product_image as $image) {
              

      $imageName = time().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('backend/images/product'), $imageName); 

      $product_image = new ProductImage;
      $product_image->product_id = $product->id;
      $product_image->image = $imageName;
      $product_image->save();



        }
      }

      session()->flash('success_add', 'Product has been Added!!');
    return redirect()->route('admin.pages.product_create');
    }


   public function update($id)
  { 
     $edit = Product::find($id);

     $products = Product::orderBy('id')->get(); 
     return view ('admin.pages.product_update')->with('products', $products)->with('edit',$edit); 
   }



    public function edit(Request $request, $id)
  {

    $product = Product::find($id);

    $product->category_id = $request->category ; 
    $product->brand_id = $request->brand ;
    $product->title = $request->title ;
    $product->slug = str_slug ($request->title) ;
    $product->description = $request->description ;
    $product-> price= $request->price ;
    $product->quantity = $request->quantity ;
    $product->offer_price = $request->offer_price ;
    $product-> save() ;


   	session()->flash('success_updated', 'Product has been Updated!!');
    return redirect()->route('admin.pages.product_create');
    }



    public function delete($id)
    {
    	$product = Product::find($id);

    	if (!is_null($product)) {
    		$product->delete();
    	}

    	session()->flash('success_delete', 'Product has been Deleted!!');
    	return redirect()->route('admin.pages.product_create');
    }




 

  }

