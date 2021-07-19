<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class MainController extends Controller
{
	public function product() {
		return Product::all();
	}

	public function category() {
		return Category::all();
	}

	public function brand() {
		return Brand::all();
	}

	public function findProductById(Request $request) {
		return Product::find($request->id);
	}

	public function findCategoryById(Request $request) {
		return Category::find($request->id);
	}

	public function findBrandById(Request $request) {
		return Brand::find($request->id);
	}
}