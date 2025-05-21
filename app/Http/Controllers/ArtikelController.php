<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::orderBy('id','desc')->get();
        return view('artikel.index', compact('artikel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:artikels',
            'isi'   => 'required',
            'foto'  => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $artikel        = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi   = $request->isi;

// Set default foto (harus ada file ini di storage/artikel/default.jpg)

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = artikel::findOrFail($id);
        return view('artikel.show', compact('artikel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:artikels',
            'isi'   => 'required',
            'foto'  => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);
        $artikel        = artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->isi   = $request->isi;

        if ($request->hasFile('foto')) {
            $artikel->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/artikel', $name);
            $artikel->foto = $name;
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'data berhasil di rubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index')->with('success', 'Data Berhasil Dihapus');

    }
}
