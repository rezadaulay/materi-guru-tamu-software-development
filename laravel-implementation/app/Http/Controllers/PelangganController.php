<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request; // Tambahkan Ini Juga Yeacchhhh

class PelangganController extends Controller
{
    public function success($idPesanan) {
        $pesanan = Pesanan::find($idPesanan);
        return view('pelanggan.success', [
            'pesanan' => $pesanan
        ]);
    }

    public function simpanPesanan (Request $request) {
        $total_harga = 0;
        foreach ($request->id_menu as $id_menu) {
            $menu = Menu::find($id_menu); // ambil setiap menu berasal dari perulangan
            $total_harga += $menu->harga;
        }

        $pesanan = Pesanan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'nomor_meja' => $request->nomor_meja,
            'total_harga' => $total_harga,
            'status' => 'baru',
            'tanggal_pesan' => now()
        ]);


        foreach ($request->id_menu as $id_menu) {
            $menu = Menu::find($id_menu); // ambil setiap menu berasal dari perulangan
            $pesanan->detail()->create([
                'id_menu' => $menu->id_menu,
                'jumlah' => 1,
                'subtotal' => $menu->harga * 1
            ]);
        }
        return redirect()->to('success/' . $pesanan->id_pesanan);
        // return $request->all(); // Munculkan semua isi $_POST
        // return $request->id_menu; // Fungsinya sama seperti $_POST['id_menu']
    }



    public function index()
    {
        return view('pelanggan.index');
    }

    public function menu()
    {
        $menu = Menu::get(); // Panggil semua isi table yang terhubung ke models Menu
        return view(
            'pelanggan.menu', [
            'menu' => $menu,
        ] );
    }

    // public function storePesanan(Request $request)
    // {
    //     // hitung total
    //     $total = 0;
    //     foreach ($request->jumlah as $id_menu => $jumlah) {
    //         if ($jumlah > 0) {
    //             $menu = Menu::find($id_menu);
    //             $total += $menu->harga * $jumlah;
    //         }
    //     }

    //     // simpan pesanan
    //     $pesanan = Pesanan::create([
    //         'nama_pelanggan' => $request->nama_pelanggan,
    //         'nomor_meja' => $request->nomor_meja,
    //         'total_harga' => $total,
    //         'status' => 'baru',
    //         'tanggal_pesan' => Carbon::now(),
    //     ]);

    //     // simpan detail
    //     foreach ($request->jumlah as $id_menu => $jumlah) {
    //         if ($jumlah > 0) {
    //             $menu = Menu::find($id_menu);
    //             DetailPesanan::create([
    //                 'id_pesanan' => $pesanan->id_pesanan,
    //                 'id_menu' => $id_menu,
    //                 'jumlah' => $jumlah,
    //                 'subtotal' => $menu->harga * $jumlah,
    //             ]);
    //         }
    //     }

    //     return redirect()->route('pelanggan.review', $pesanan->id_pesanan);
    // }

    // public function review($id)
    // {
    //     $pesanan = Pesanan::with('detail.menu')->findOrFail($id);
    //     return view('pelanggan.review', compact('pesanan'));
    // }

    // public function payment($id)
    // {
    //     $pesanan = Pesanan::findOrFail($id);
    //     return view('pelanggan.payment', compact('pesanan'));
    // }

    // public function storePayment(Request $request, $id)
    // {
    //     Pembayaran::create([
    //         'id_pesanan' => $id,
    //         'metode' => $request->metode,
    //         'status_bayar' => 'belum',
    //     ]);

    //     return redirect()->route('pelanggan.success', $id);
    // }

    // public function success($id)
    // {
    //     $pesanan = Pesanan::with('detail.menu')->findOrFail($id);
    //     return view('pelanggan.success', compact('pesanan'));
    // }

    // public function status()
    // {
    //     return view('pelanggan.status');
    // }

    // public function checkStatus(Request $request)
    // {
    //     $request->validate([
    //         'nomor_meja' => 'required'
    //     ]);

    //     $pesanan = Pesanan::where('nomor_meja', $request->nomor_meja)
    //                 ->latest('tanggal_pesan')
    //                 ->first();

    //     if (!$pesanan) {
    //         return back()->with('error', 'Pesanan tidak ditemukan untuk meja ini.');
    //     }

    //     return view('pelanggan.status_result', compact('pesanan'));
    // }

}
