<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Penjualan;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $produk = Produk::count();

        $tanggal_awal = date('Y-m-01');
        $tanggal_akhir = date('Y-m-d');

        if (auth()->user()->level == 1) {
            return view('admin.dashboard', compact('kategori', 'produk'));
        } else {
            return view('kasir.dashboard');
        }
    }
}
