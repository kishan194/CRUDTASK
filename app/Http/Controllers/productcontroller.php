<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productcontroller extends Controller
{

      //addthe Product
      public function addproduct(Request $req){
            $imagename = time(). '.' .$req->image->extension();
            $imagename1 = time(). '.' .$req->image1->extension();
            $imagename2 = time(). '.' .$req->image2->extension();
            $imagename3 = time(). '.' .$req->image3->extension();
            $req->image->move(public_path('products'),$imagename);
            $req->image1->move(public_path('products'),$imagename1);
            $req->image2->move(public_path('products'),$imagename2);
            $req->image3->move(public_path('products'),$imagename3);
            $product = new product;
            $product->image = $imagename;
            $product->image1 = $imagename1;
            $product->image2 = $imagename2;
            $product->image3 = $imagename3;
            $product->name = $req->name;
            $product->slug =(str::slug($req->slug));
            $product->price = $req->price;
            $product->description = $req->description;
            $product->category = $req->category;
            $product -> save();
            return back()->withSuccess('Product Created');
      }  

      //display the product
      public function show(){
            $product = product::all();
            // echo "<pre>";
            // print_r($product);
             $product =  compact('product');
            return view('display')->with($product);
      }

      //single view product
      public function singleproduct($id){
             $product = DB::table('products')->where('id',$id)->get();
             return view('singleview',['data'=>$product]);
      }


      //update the product
          public function updateproduct(Request $req, $id){
               // dd($req->all());
               $product = product::where('id',$id)->first();
               if(isset($req->image)){

               $imagename = time(). '.' .$req->image->extension();
               $req->image->move(public_path('products'),$imagename);
               $product->image = $imagename;
               }
               $product->name = $req->name;
               $product->slug = $req->slug;
               $product->price = $req->price;
               $product->description = $req->description;
               $product->category = $req->category;
               $product -> save();
               return back()->withSuccess('Product Updated');

          }
          public function updatepage($id){
            $product = product::where('id',$id)->find($id);
            return view('updateproduct',['data' => $product]);
          }
          public function deleteproduct($id){
                      $product = product::find($id);
                       if(!is_null($product)){
                        $product->delete();
                       }
                       return redirect()->back();
          }
          public function addimage(Request $req,$id){
            $product = product::where('id',$id)->first();
          
             $imagename = time(). '.' .$req->image->extension();
             $req->image->move(public_path('products'),$imagename);
             $product->image = $imagename;
             $product -> save();
             return back()->withSuccess('Product Image Updated..');

            
          }

          public function updateimage($id){
            // dd($req->all());
            $product = product::where('id',$id)->find($id);
            return view('addimage',['data' => $product]);
           
          }
          public function addmulimage(Request $req,$id){

            $product = product::where('id',$id)->first();

            
            $imagename1 = time(). '.' .$req->image1->extension();
            $imagename2 = time(). '.' .$req->image2->extension();
            $imagename3 = time(). '.' .$req->image3->extension();
            
            $req->image1->move(public_path('products'),$imagename1);
            $req->image2->move(public_path('products'),$imagename2);
            $req->image3->move(public_path('products'),$imagename3);
            $product->image1 = $imagename1;
            $product->image2 = $imagename2;
            $product->image3 = $imagename3;
            $product -> save();
            return back()->withSuccess('Product Updated');
          }
          public function updatemulimage($id){
            $product = product::where('id',$id)->find($id);
            return view('addmulimage',['data' => $product]);
          }


}
