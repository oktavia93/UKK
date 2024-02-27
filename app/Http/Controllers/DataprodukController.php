<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Produks;
use Illuminate\Http\Request;

class DataprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produks::all();

        return view('admin.dataproduk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.CRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'judul' => 'required',
            'keterangan' => 'required|min:5',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Produks::create([
            'image' => $image->hashName(),
            'judul' => $request->judul,
            'keterangan' => $request->keterangan
        ]);

        return redirect('dataproduk')->with('success', 'Produks created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
