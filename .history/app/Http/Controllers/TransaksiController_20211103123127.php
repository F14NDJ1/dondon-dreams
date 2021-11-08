<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = DB::table('details')
            ->join('bgestbls', 'bgestbls.id', '=', ('details.detailbges_id'))
            ->select(
                'bgestbls.id as id_tel',
                'bgestbls.order_id',
            )
            ->get();

        $Transaksi = DB::table('transaksis')
            ->join('produks', 'transaksis.id_transaksi', '=', 'produks.id_produk')
            ->select('transaksis.*', 'produks.nama_produk')
            ->get();


        return view('/admin/index', $Transaksi, [
            "title" => "Data Transaksi"

        ]);
    }
}
