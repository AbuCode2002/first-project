<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SportTravelController extends BaseController
{
    public function index()
    {
        $category = Category::all();
        return view('SportTravel');
    }
    public function cost()
    {
        $product = Product::find(1);
        //dd($product->cost);
    }
    public function detail()
    {
        $subcategories = Subcategory::all();
        return view('SportTravel', compact('subcategories'));
    }
    public function show()
    {
        $products = Product::all();
        return view('details.show', compact('products'));
    }
}
