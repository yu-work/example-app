<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('product', [
            'list' => Product::with('price')->limit(10)->get(),
        ]);
    }
}
