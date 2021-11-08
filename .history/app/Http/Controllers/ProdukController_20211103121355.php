<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();

        return view('/admin/produk', [
            "title" => "Data Produk",
            "produks" => Produk::all()
        ]);
    }
}
