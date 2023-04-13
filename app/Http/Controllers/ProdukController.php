<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk(Request $request)
    {
        $data = produk::all();
        return view('admin.menu.dataproduk', compact('data'));
    }
    public function create()
    {
        return view('admin.menu.dataproduk');
    }
    public function store(Request $request)
    {
        $data = produk::create($request->all());
        if ($request->hasFile('gambar')) {
            // $request->file('gambar')->move('store/', $request->file('gambar')->getClientOriginalName());
            // $data->gambar = $request->file('gambar')->getClientOriginalName();

            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('img/store'), $filename);
            $data->gambar = $filename;
            $data->save();
        }
        return redirect('/dataproduk');
    }

    public function edit($id)
    {
        $data = produk::find($id);
        return view('/dataproduk', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = produk::find($id);

        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('img/store'), $filename);
            $data->gambar = $filename;
        }
        $data->save();
        return redirect('/dataproduk');
    }



    public function delete($id)
    {
        $data = produk::find($id);
        $data->delete();
        return redirect('/dataproduk');
    }
    public function show(produk $produk)
    {
        return view('user.pesan', [
            'produk' => $produk
        ]);
    }
}
