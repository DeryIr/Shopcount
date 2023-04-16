<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\produk;
use Illuminate\Contracts\Session\Session;
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
        $request->request->add(['status' => 'Unpaid']);
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
}
