<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $request)
    {
        $data = User::all();
        return view('admin.menu.datauser', compact('data'));
    }
    public function create()
    {
        return view('admin.menu.datauser');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/datauser');
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('/datauser', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = User::find($id);
        $data->update($request->all());
        $data->save;
        return redirect('/datauser');
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/datauser');
    }


    public function  jumlah()
    {
        $Totaluser = User::all()->count();
        $Totalproduk = produk::all()->count();
        $Totalorder = order::all()->count();
        $Totallunas = Order::where('status', 'Lunas')->count();
        $Totalbelumlunas = Order::where('status', 'Belum Lunas')->count();
        $Totalkeuanganlunas = Order::where('status', 'Lunas')->sum('harga_produk');
        $Totalkeuanganbelumlunas = Order::where('status', 'Belum Lunas')->sum('harga_produk');


        return view('admin.admin', compact(
            'Totaluser',
            'Totalproduk',
            'Totalorder',
            'Totallunas',
            'Totalbelumlunas',
            'Totalkeuanganlunas',
            'Totalkeuanganbelumlunas'
        ));
    }
}
