<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function orders()
    {
        $data = Order::all();
        $products = Product::all();
        $regions = Region::all();
        return view('orders',['orders'=>$data,'products'=>$products,'regions'=>$regions]);
    }

    public function addorder()
    {
        $data = \request()->validate([
            'Customername'=>'required',
            'Phonenumber'=>'required',
            'Deliveryloc'=>'required',
            'Productname'=>'required',
            'Productquantity'=>'required',
            'Productprice'=>'required',
            'Deliverydate'=>'required',
        ]);

        $order = new Order();
        $order->customername = $data['Customername'];
        $order->phonenumber = $data['Phonenumber'];
        $order->deliverylocation = $data['Deliveryloc'];
        $order->pname = $data['Productname'];
        $order->pquantity = $data['Productquantity'];
        $order->pprice = $data['Productprice'];
        $order->edeliverydate = $data['Deliverydate'];
        $order->employeeid = Auth::user()->id;
        $order->save();

        return back();

    }
}
