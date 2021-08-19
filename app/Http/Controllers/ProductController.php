<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $product = Product::paginate(10);
            return response()->json([
                'result' => $product,
                'method' => 'GET',
                'message' => 'success',
                'status' => true,
            ], 200);
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json([
                'result' => $product,
                'method' => 'GET',
                'message' => $th,
                'status' => true,
            ], 500);
        }
    }
}
