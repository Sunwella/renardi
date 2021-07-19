<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class BaseController extends Controller
{
    public function index() {
    	return view('welcome');
    }

    public function about() {
    	return view('pages.about.index');
    }

    public function delivery() {
    	return view('pages.delivery.index');
    }

    public function pay() {
    	return view('pages.pay.index');
    }

    public function exclusive() {
    	return view('pages.exclusive.index');
    }

    public function contact() {
    	return view('pages.contact.index');
    }

    public function catalog() {
        $categories = Category::all();
        $products = Product::all();
        return view('pages.catalog.index', compact('categories', 'products'));
    }

    public function cart() {
        return view('pages.cart.index');
    }

    public function checkout() {
        return view('pages.checkout.index');
    }

    public function thanks() {
        return view('pages.thanks.index');
    }

    public function product(Product $shopProduct) {
        return view('pages.catalog.components.product-item', compact('shopProduct'));
    }
}
