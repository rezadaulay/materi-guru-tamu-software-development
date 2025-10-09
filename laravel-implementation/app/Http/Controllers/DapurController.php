<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request; // Tambahkan Ini Juga Yeacchhhh

class DapurController extends Controller
{
    public function totalPesanan() {
        return Pesanan::where('status', 'baru')->orWhere('status', 'diproses')->count();
    }

    public function selesaiOrder ($id) {
        $pesanan = Pesanan::find($id);
        $pesanan->update([
            'status' => 'selesai'
        ]);

        return redirect()->to('dapur/order');
    }

    public function prosesOrder ($id) {
        $pesanan = Pesanan::find($id);
        $pesanan->update([
            'status' => 'diproses'
        ]);

        return redirect()->to('dapur/order');
    }

    public function detailOrder ($id) {
        $pesanan = Pesanan::find($id);
        return view('dapur.detail-order', [
            'pesanan' => $pesanan
        ]);
    }

    public function order() {
        $pesananMasuk = Pesanan::where('status', 'baru')->orWhere('status', 'diproses')->get();
        return view('dapur.order', [
            'pesananMasuk' => $pesananMasuk
        ]);
    }
}
