<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    private $products, $product;
    public function home()
    {
        $this->products=Product::where('status',1)->orderBy('id','DESC')->get();
        return view('front.home.home',[
            'products' =>$this->products
        ]);
    }

}
