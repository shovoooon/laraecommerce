<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function products()
    {
        $products = Product::all();
        return view('pages.product.index', ['products' => $products]);
    }

}
