<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Buku::all();
        // dd($data);
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'status' => 'required',
        ]);
        Buku::create($validated);
        return redirect('/buku');
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
    public function edit(Buku $buku)
    {
        return view(
            'edit',
            ['buku' => $buku]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validated = $request->validate([
            'judul' => 'required|min:10',
            'penulis' => 'required',
            'penerbit' => 'required',
            'sinopsis' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'status' => 'required',
        ]);

        $buku->update($validated);

        return redirect('/buku')->with('success', 'Buku Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect('/buku')->with('success', 'Buku Berhasil Dihapus');
    }
}
