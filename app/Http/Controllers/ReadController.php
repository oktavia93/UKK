<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function index()
    {
        // Membaca semua data
        $produks = Produk::all();

        // Mengembalikan data dalam response
        return response()->json($produks);
    }

    public function show($id)
    {
        // Membaca data berdasarkan ID
        $produks = Produk::find($id);

        // Mengembalikan data dalam response
        return response()->json($produks);
    }
}
