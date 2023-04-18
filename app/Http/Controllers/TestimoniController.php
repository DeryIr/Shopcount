<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function testimoni(Request $request)
    {
        $data = testimoni::where('status', 'Tampil')->get();
        return view('user.testimoni', compact('data'));
    }
    public function store(Request $request)
    {
        $request->request->add(['status' => 'Belum Tampil']);
        testimoni::create($request->all());
        return view('user.index');
    }
    public function data(Request $request)
    {
        $data = testimoni::all();
        return view('admin.menu.datatestimoni', compact('data'));
    }
    public function delete($id)
    {
        $data = testimoni::find($id);
        $data->delete();
        return redirect('/datatestimoni');
    }
    public function tampil($id)
    {
        $data = testimoni::find($id);
        // dd($tagihan);
        $data->update(['status' => 'Tampil']);
        return redirect('/datatestimoni');
    }
}
