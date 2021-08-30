<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $response;

    public function __construct()
    {
        $this->response = [
            'success' => true,
            'result' => [],
            'error' => []
        ];
    }

    public function index()
    {
        $products = Product::paginate(20);
        $this->response['result'] = $products;
        return response()->json($this->response);
    }
}
