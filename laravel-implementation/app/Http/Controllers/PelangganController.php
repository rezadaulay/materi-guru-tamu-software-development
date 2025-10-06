<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\Pembayaran;
use Carbon\Carbon;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.index');
    }

    public function menu()
    {
        $menu = Menu::all();
        return view('pelanggan.menu', compact('menu'));
    }

    public function storePesanan(Request $request)
    {
        // hitung total
        $total = 0;
        foreach ($request->jumlah as $id_menu => $jumlah) {
            if ($jumlah > 0) {
                $menu = Menu::find($id_menu);
                $total += $menu->harga * $jumlah;
            }
        }

        // simpan pesanan
        $pesanan = Pesanan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_meja' => $request->nomor_meja,
            'total_harga' => $total,
            'status' => 'baru',
            'tanggal_pesan' => Carbon::now(),
        ]);

        // simpan detail
        foreach ($request->jumlah as $id_menu => $jumlah) {
            if ($jumlah > 0) {
                $menu = Menu::find($id_menu);
                DetailPesanan::create([
                    'id_pesanan' => $pesanan->id_pesanan,
                    'id_menu' => $id_menu,
                    'jumlah' => $jumlah,
                    'subtotal' => $menu->harga * $jumlah,
                ]);
            }
        }

        return redirect()->route('pelanggan.review', $pesanan->id_pesanan);
    }

    public function review($id)
    {
        $pesanan = Pesanan::with('detail.menu')->findOrFail($id);
        return view('pelanggan.review', compact('pesanan'));
    }

    public function payment($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('pelanggan.payment', compact('pesanan'));
    }

    public function storePayment(Request $request, $id)
    {
        Pembayaran::create([
            'id_pesanan' => $id,
            'metode' => $request->metode,
            'status_bayar' => 'belum',
        ]);

        return redirect()->route('pelanggan.success', $id);
    }

    public function success($id)
    {
        $pesanan = Pesanan::with('detail.menu')->findOrFail($id);
        return view('pelanggan.success', compact('pesanan'));
    }

    public function status()
    {
        return view('pelanggan.status');
    }

    public function checkStatus(Request $request)
    {
        $request->validate([
            'nomor_meja' => 'required'
        ]);

        $pesanan = Pesanan::where('nomor_meja', $request->nomor_meja)
                    ->latest('tanggal_pesan')
                    ->first();

        if (!$pesanan) {
            return back()->with('error', 'Pesanan tidak ditemukan untuk meja ini.');
        }

        return view('pelanggan.status_result', compact('pesanan'));
    }

}
