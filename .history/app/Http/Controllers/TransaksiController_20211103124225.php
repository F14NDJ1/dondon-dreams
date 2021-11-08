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
            ->select(
                'transaksis.id_trasnaksi as id_trs',
                'transaksis.nama_pelanggan as nama',
                'transaksis.no_wa as no_wa',
                'transaksis.total_pembayaran as total',
                'transaksis.status as status',
                'transaksis.created_at as tanggal',
                'produks.id_produk as id_prd',
                'produks.nama_produk as nama_prdk',
                'produks.harga_produk as harga_prdk'
            )
            ->get();


        return view('/admin/index', compact $Transaksi , [
            "title" => "Data Transaksi"

        ]);
    }
}
