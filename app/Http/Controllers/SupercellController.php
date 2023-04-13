<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class SupercellController extends Controller
{
    // public function produksteam(Request $request)
    // {
    //     $data = produk::all();
    //     return view('user.steam', compact('data'));
    // }
    public function produksupercell(Request $request)
    {
        $data = produk::where('kategory', 'Supercell')->get();
        return view('user.supercell', compact('data'));
    }

    public function create()
    {
        return view('user.supercell');
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
        return redirect('/supercell');
    }
}
