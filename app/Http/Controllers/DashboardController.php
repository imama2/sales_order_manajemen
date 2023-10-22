<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil informasi barang
        $barang = Barang::get();

        // Menghitung total penjualan
        $total_penjualan = Penjualan::sum('jml_penjualan');

        // Menghitung total pendapatan
        $total_pendapatan = Penjualan::sum(DB::raw('jml_penjualan * harga_jual'));

        // Menghitung total pembelian
        $total_pembelian = Pembelian::sum(DB::raw('jml_pembelian * harga_beli'));

        // Menghitung total pengeluaran
        $total_pengeluaran = $barang->sum('harga_beli') + DB::table('pembelian')->sum(DB::raw('jml_pembelian * harga_beli'));

        // Menghitung laba/rugi
        $laba_rugi = $total_pendapatan - $total_pengeluaran;
        // Mengirim data ke view
        return view('dashboard.index', [
            'barangs' => $barang,
            'total_penjualan' => $total_penjualan,
            'total_pendapatan' => $total_pendapatan,
            'total_pembelian' => $total_pembelian,
            'total_pengeluaran' => $total_pengeluaran,
            'laba_rugi' => $laba_rugi,
        ]);
    }
}
