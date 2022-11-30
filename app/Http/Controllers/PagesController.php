<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $pproducts = Product::with('category','colors')->orderBy('created_at', 'desc')->get();
        return view('pages.home', ['products'=> $pproducts]);
    }

    public function cart()
    {
       // dd(session()->get('cart'));
       return view('pages/cart');
    }
    public function success()
    {
       // dd(session()->get('cart'));
       return view('pages/success');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }
    public function account()
    {
        return view('pages.account');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }
    
    public function product($id)
    {
        $product =Product::with('category', 'colors')->findOrFail($id);
        return view('pages.product', ['product' => $product]);
    }
}
