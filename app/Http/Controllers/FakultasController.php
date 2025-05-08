<?php
namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use Storage;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.index', compact('fakultas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fakultas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fakultas                = new Fakultas;
        $fakultas->nama_fakultas = $request->nama_fakultas;
        $fakultas->deskripsi     = $request->deskripsi;

// Set default foto (harus ada file ini di storage/fakultas/default.jpg)

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fakultas', $name);
            $fakultas->foto = $name;
        }

        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success', 'data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fakultas = fakultas::findOrFail($id);
        return view('fakultas.show', compact('fakultas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = fakultas::findOrFail($id);
        return view('fakultas.edit', compact('fakultas'));

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
            'nama_fakultas' => 'required',
            'deskripsi'     => 'required',
            'foto'          => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $fakultas                = Fakultas::findOrFail($id);
        $fakultas->nama_fakultas = $request->nama_fakultas;
        $fakultas->deskripsi     = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $fakultas->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fakultas', $name);
            $fakultas->foto = $name;
        }

        $fakultas->save();
        return redirect()->route('fakultas.index')->with('success', 'data berhasil di rubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data Berhasil Dihapus');

    }
}
