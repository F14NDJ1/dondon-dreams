<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $Transaksi = DB::table('transaksi')
            ->join('produk', 'transaksi.id_transaksi', '=', 'produk.id_produk')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();


        return view('/admin/index', $Transaksi, [
            "title" => "Data Transaksi"

        ]);
    }
}
