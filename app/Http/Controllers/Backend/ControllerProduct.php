<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ControllerProduct extends Controller
{

    public function index(){
        return view('backend.pages.brand.add');
    }
    public function insert(Request $request){

        $product =new Product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->status=$request->status;
        $product->save();
        return redirect()->route('showproduct');
    }

    public function show(){
        $products= Product::all();

        return view ('backend.pages.brand.manage',compact('products'));
    }
    public function delete($id){
        $product= Product::find($id);
        $product->delete();
        return back();
    }


}
