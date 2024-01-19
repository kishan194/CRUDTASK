<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class categorycontroller extends Controller
{
    public function index(){
        return view('category/index');
    }
    public function store(Request $request){
        $category = new category();
        $category->name = $request->name;
        $category->slug = (str::slug($request->slug));
        $category->save();
        return back()->withSuccess('Category Added.....');
        }
     //   dd($request->all());
}
