<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;


class ProduksController extends Controller
{
    //class AuthController extends Controller

    public function index()
    {
        $produks = Produks::all();
        return view('/create', compact('create'));
    }

    public function show($id)
    {
        //
    }
    public function viewcreate()
    {
        return view('admin.CRUD.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $produks = new Produks();
        $produks->judul = $request->judul;
        $produks->keterangan = $request->keterangan;
        $produks->image = $request->gambar;
        $produks->save();

        return redirect('dataproduk')->with('success', 'Produks created successfully');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
