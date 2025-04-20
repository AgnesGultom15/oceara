<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop ASUS'],
            ['id' => 2, 'produk' => 'Mouse Logitech'],
            ['id' => 3, 'produk' => 'Monitor Samsung'],
        ];

        return view('list_product', ['data' => $data]);
    }
}

