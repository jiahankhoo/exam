<?php

namespace App\Http\Controllers;

use App\Models\products as ModelsProducts;
use Illuminate\Http\Request;

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
}
