<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;




class PriceController extends Controller
{
    function save(Request $req)
    {
        print_r($req->input());

    }

    public function index()
    {
        $products = Product::with('category')->get();
        return view('welcome',compact('products'));
    }

    public function create()
    {
        return view('total.amount');

    }

    public function range(Request $request)
    {
        $input = $request ->all();

        Product::çreate($input);
        return redirect('/');
    }
}
