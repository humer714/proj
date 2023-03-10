<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct()
    {
        
       return view('admin.product');
    }

    public function add_product()
    {
        
       return view('admin.addproduct');
    }
    public function store_product(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $product = Product::create([
            'name'=>$request->name,
            'pic'=>$this->addImg($request->image),
        ]);
        $product->save();
       return redirect()->route('admin.product');
    }
    public function addImg($image)
    {

        $extension = $image->getClientOriginalExtension();
        $filename = rand(1, 5000) . time() . '.' . $extension;
        $image->move(public_path('assets/uploads/products'), $filename);
        $path = '/assets/uploads/products/' . $filename;
        return $path;
    }
    public function edit_product($id)
    {
        $product = Product::find($id);
       return view('admin.editproduct',compact('product'));
    }
    public function update_product(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
            if($request->image){
            $delete_img = public_path("{$product->pic}");
            unlink($delete_img);
                $product->pic = $this->addImg($request->image);
            }
             $product->save();
       return redirect()->route('admin.product')->with('success','product updated sucessfuly');
    }
}
