<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use \App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $data = Product::all();
        $category = Category::all();
        return view('products',['products'=>$data,'categories'=>$category]);
    }

    public function addproduct()
    {
        $data = \request()->validate([
            'ProductCategory'=>'required|String',
            'ProductDescription'=>'max:100',
            'ProductQuantity'=>'required|integer',
            'BuyingPrice'=>'required',
            'SellingPrice'=>'required',
            'Productname'=>'required',
            ]);

        $product = new \App\Models\Product();
            $product->pname = $data['Productname'];
            $product->pcid = $data['ProductCategory'];
            $product->pdesc = $data['ProductDescription'];
            $product->pquantity = $data['ProductQuantity'];
            $product->pbprice = $data['BuyingPrice'];
            $product->psprice = $data['SellingPrice'];
            $product->save();


        return back();
    }

}
