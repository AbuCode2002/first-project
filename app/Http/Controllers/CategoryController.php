<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        return view('details.detailsSportTravel', compact('products'));
    }

    public function show(Category $category)
    {
        return view('show', compact('category'));
    }
}
