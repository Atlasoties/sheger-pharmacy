<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        return view('shop.shop');
    }

    public function shop_grid(Request $request)
    {
        return view('shop.shop-grid');
    }

    public function shop_right(Request $request)
    {
        return view('shop.shop-right-sidebar');
    }

    public function shop_left(Request $request)
    {
        return view('shop.shop-left-sidebar');
    }

    public function cart(Request $request)
    {
        return view('shop.cart');
    }

    public function checkout(Request $request)
    {
        return view('shop.checkout');
    }

    public function order_tracking(Request $request)
    {
        return view('shop.order-tracking');
    }

    public function product_details(Request $request)
    {
        return view('shop.product-details');
    }

    public function wishlist(Request $request)
    {
        return view('shop.wishlist');
    }

    public function account(Request $request)
    {
        return view('shop.account');
    }

    public function register(Request $request)
    {
        return view('shop.register');
    }

    public function login(Request $request)
    {
        return view('shop.login');
    }

}
