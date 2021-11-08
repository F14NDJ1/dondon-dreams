<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $Transaksi = DB::table('transaksis')
            ->join('produks', 'transaksis.id_transaksi', '=', 'produks.id_produk')
            ->select('Transaksi.*', 'produks.nama_produk')
            ->get();


        return view('/admin/index', $Transaksi, [
            "title" => "Data Transaksi"

        ]);
    }
}
