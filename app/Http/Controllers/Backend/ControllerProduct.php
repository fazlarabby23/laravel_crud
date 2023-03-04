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
    public function active($id){
        $product = Product::find($id);
        $product->status = '2';
        $product->update();
        return back();
    }
    public function inactive($id){
        $product = Product::find($id);
        $product->status = '1';
        $product->update();
        return back();
    }
    public function edit($id){
        $product = Product::find($id);
        return view('backend.pages.brand.edit',compact('product'));

    }
    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->status=$request->status;
        $product->update();
        return redirect()->route('showproduct');;

    }







}
