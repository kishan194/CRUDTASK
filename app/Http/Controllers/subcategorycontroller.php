<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class subcategorycontroller extends Controller
{
  
    public function Addsubcategory(){
        $categories = category::orderBy('category_name','ASC')->get();
        return view('category.index',compact('categories'));
     }
    public function storesubcategory(Request $request){

        $subcategory = new subcategory;
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name =$request->subcategory_name;
        $subcategory->subcategory_slug =str::slug( $request->subcategory_slug);
        $subcategory->save();
        return back();
    }
}
