<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request; // Tambahkan Ini Juga Yeacchhhh

class WaitressController extends Controller
{
    public function detailOrder ($id) {
        $pesanan = Pesanan::find($id);
        return view('waitress.detail-order', [
            'pesanan' => $pesanan
        ]);
    }

    public function antarOrder ($id) {
        $pesanan = Pesanan::find($id);
        $pesanan->update([
            'status' => 'diantar'
        ]);

        return redirect()->to('waitress/order');
    }

    public function order() {
        $pesananMasuk = Pesanan::where('status', 'selesai')->get();
        return view('waitress.order', [
            'pesananMasuk' => $pesananMasuk
        ]);
    }
}
