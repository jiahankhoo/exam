<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\products as ModelsProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class products extends Controller
{
    public function home(){
        return view('/home',[
            "products" => ModelsProducts::all()
        ]);
    }
    public function add($id){
            $product = ModelsProducts::find($id);
            return view('/add',[
                "product" => $product
            ]);
    }
     public function addcart(Request $request, $id){
        // $product = ModelsProducts::find($id);
        $product = $request->validate([
            'mass'=>'required|numeric',
        ]);

        $input = new carts();
    $input->user_id = Auth::id();
    $input->product_id = $id;
    $input->mass=$product['mass'];
    $input->c_status='pending';
    $input->save();
    return redirect('/cartlist')->with('success','Product added to cart');
}
}
