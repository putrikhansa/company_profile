<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::orderBy('id', 'desc')->get();
;
        return view('fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fasilitas                 = new Fasilitas;
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fasilitas', $name);
            $fasilitas->foto = $name;
        }

        $fasilitas->save();
        return redirect()->route('fasilitas.index')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        return view('fasilitas.show', compact('fasilitas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
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
            'nama_fasilitas' => 'required',
            'foto'           => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);

        $fasilitas                 = Fasilitas::findOrFail($id);
        $fasilitas->nama_fasilitas = $request->nama_fasilitas;

        if ($request->hasFile('foto')) {
            $fasilitas->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fasilitas', $name);
            $fasilitas->foto = $name;
        }

        $fasilitas->save();
        return redirect()->route('fasilitas.index')->with('success', 'data berhasil di rubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitas = fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Data Berhasil Dihapus');

    }
}
