<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
       $cart = Cart::find($request->cart_id);
       $data['product_id']=$cart->product_id;
       $data['quantity']=$cart->quantity;
       $data['price']=$cart->product->price;
        $data['user_id']=auth()->id();
        $data['order_date'] = date('Y-m-d');
        $data['status'] = 'Pending';
        Order::create($data);
        Cart::find($request->cart_id)->delete();
        return redirect('/cart')->with('success', 'Order placed Successfully');
    } 
}
