<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Contracts\Service\Attribute\Required;

class OrderController extends Controller
{
    public function order(produk $order)
    {
        return view('transaksi.order', [
            'produk' => $order
        ]);
    }
    // public function create()
    // {
    //     return view('transaksi.order');
    // }\
    public function checkout(Request $request)
    {
        $request->request->add(['status' => 'Belum Lunas']);
        $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->harga_produk,
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'email' => $request->email,
                'phone' => $request->no_hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('transaksi.detailorder', compact('snapToken', 'order'));
    }
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Lunas']);
            }
        }
    }
    public function invoice($id)
    {
        $order = Order::find($id);
        return view('transaksi.invoice', compact('order'));
    }

    public function data(Request $request)
    {
        $data = order::all();
        return view('admin.menu.datapenjualan', compact('data'));
    }
    public function delete($id)
    {
        $data = order::find($id);
        $data->delete();
        return redirect('/datapenjualan');
    }
    public function lunas($id)
    {
        $data = order::find($id);
        // dd($tagihan);
        $data->update(['status' => 'Lunas']);
        return redirect('/datapenjualan');
    }
    public function keuangan(Request $request)
    {
        $data = Order::where('status', 'Lunas')->get();
        $total_harga = Order::where('status', 'Lunas')->sum('harga_produk');

        return view('admin.menu.datakeuangan', compact('data', 'total_harga'));
    }
}
