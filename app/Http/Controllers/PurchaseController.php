<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function purchases()
    {
        $data = Purchases::all();
        $products = Product::all();
        return view('purchase',['purchases' => $data,'products'=>$products]);
    }

    public function addpurchase()
    {
        $data = \request()->validate([
            'Customername'=>'required',
            'Phonenumber'=>'required',
            'Productname'=>'required',
            'ProductPrice'=>'required',
            'ProductQuantity'=>'required',
            'AmountPaid'=>'required',
        ]);

        $purchases = new Purchases();
        $purchases->customername = $data['Customername'];
        $purchases->customerphone = $data['Phonenumber'];
        $purchases->pid = $data['Productname'];
        $purchases->pprice = $data['ProductPrice'];
        $purchases->quantity = $data['ProductQuantity'];
        $purchases->eid = Auth::user()->id;
        $purchases->amountpaid = $data['AmountPaid'];
        $purchases->save();

        return back();

    }
}
