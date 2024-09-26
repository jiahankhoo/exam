<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;

class cart extends Controller
{
    public function cartlist(){
        $product=carts::selectRaw('*,cart.mass as c_mass,cart.updated_at as checkout_date')
        ->join('products','products.id',"=", "cart.product_id")->get();
        return view('cartlist',compact('product'));
    }
    public function checkout(Request $request){
        $checkout = carts::where('c_status','pending')->update(['c_status' => 'completed']);
        return redirect('/home')->with('checkout successfully', 'check out placed successfully');

}
}
