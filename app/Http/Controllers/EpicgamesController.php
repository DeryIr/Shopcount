<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class EpicgamesController extends Controller
{
    // public function produksteam(Request $request)
    // {
    //     $data = produk::all();
    //     return view('user.steam', compact('data'));
    // }
    public function produkepicgames(Request $request)
    {
        $data = produk::where('kategory', 'Epic_game')->get();
        return view('user.epicgames', compact('data'));
    }

    public function create()
    {
        return view('user.epicgames');
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
        return redirect('/epicgames');
    }
}
