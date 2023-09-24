<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::orderBy('created_at', 'DESC')->get();

        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Buku Telah Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $barang = Barang::findOrfail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrfail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrfail($id);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Minuman Telah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrfail($id);

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Minuman Telah Di Hapus');
    }
}
