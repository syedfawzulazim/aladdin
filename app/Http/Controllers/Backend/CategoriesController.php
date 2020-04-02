<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function create ()
    {

       $categories = Category::orderBy('parent_id')->get();
       $main_categories = Category::orderBy('name', 'desc')->where('parent_id', NULL)->get();
      return view ('admin.pages.category.create',  compact('categories', 'main_categories'));

    }

    public function store(Request $request)
  {

  	if($request->isMethod('post')){
  		$data = $request->all();
  	}

    $category = new Category;

    $category->name = $data ['category_name'];
    $category->description = $data ['description'] ;
    $category->parent_id = $data['parent_id'];
    $category-> save();


   
       if ($request->hasFile('category_image')) {
      
      $image = $request->file('category_image');

      $imageName = time().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('backend/images/category'), $imageName); 

    
      $category->image = $imageName;
      $category->save();



        }
      

      session()->flash('success_add', 'Category has been Added!!');
    return redirect()->route('admin.pages.category.create');
    }



    public function edit (Request $request, $id=null)
    {
    	if ($request->isMethod('post')) {
    		
    		$data = $request->all();
    		Category::where (['id' => $id])->update(['name'=>$data['category_name'], 'description'=>$data['description'],'parent_id'=>$data['parent_id']]);

    	return redirect()->route('admin.pages.category.create')->with('success_updated', 'Categoty has been Updated!!');
    	}


    	$edit = Category::find($id);

    	$name =Category::where( 'id', '=', $edit->parent_id)->value('name'); 
   
    	$main_categories = Category::find($id)->where('parent_id', NULL)->get();

    	$categories = Category::orderBy('parent_id')->get();
      return view ('admin.pages.category.edit')->with('categories', $categories)->with('edit',$edit)->with('main_categories',$main_categories)->with('name',$name); 
    }



  //    public function update(Request $request, $id)
  // {
  // 	$category = Category::find($id);

  //   $category->name = $request->category_name;
  //   $category->description = $request->description;
  //   $category->parent_id = $request->parent_id;
  //   $category-> save();


  //  	session()->flash('success_updated', 'Categoty has been Updated!!');
  //   return redirect()->route('admin.pages.category.create');
  //   }



    public function delete($id)
    {
      $category = Category::find($id);

      if (!is_null($category)) {
        $category->delete();
      }

      session()->flash('success_delete', 'category has been Deleted!!');
      return redirect()->route('admin.pages.category.create');
    }

}
