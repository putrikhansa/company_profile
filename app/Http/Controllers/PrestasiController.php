<?php
namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi::orderBy('id', 'desc')->get();
;
        return view('prestasi.index', compact('prestasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestasi.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestasi                = new Prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->deskripsi     = $request->deskripsi;
        $prestasi->jenis         = $request->jenis;

// Set default foto (harus ada file ini di storage/prestasi/default.jpg)

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestasi = prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));

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
            'nama_prestasi' => 'required',
            'deskripsi'     => 'required',
            'jenis'         => 'required',
            'foto'          => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $prestasi                = Prestasi::findOrFail($id);
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->deskripsi     = $request->deskripsi;
        $prestasi->jenis         = $request->jenis;

        if ($request->hasFile('foto')) {
            $prestasi->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/prestasi', $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'data berhasil di rubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Dihapus');

    }
}
