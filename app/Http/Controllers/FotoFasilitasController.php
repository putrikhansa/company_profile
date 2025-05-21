<?php
namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\FotoFasilitas;
use Illuminate\Http\Request;

class FotoFasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fotofasilitas = FotoFasilitas::orderBy('id', 'desc')->get();;
        return view('fotofasilitas.index', compact('fotofasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('fotofasilitas.create', compact('fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fotofasilitas               = new FotoFasilitas;
        $fotofasilitas->id_fasilitas = $request->id_fasilitas;

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fotofasilitas', $name);
            $fotofasilitas->foto = $name;
        }

        $fotofasilitas->save();
        return redirect()->route('fotofasilitas.index')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotofasilitas = fotofasilitas::findOrFail($id);
        $fasilitas     = Fasilitas::all();
        return view('fotofasilitas.edit', compact('fotofasilitas', 'fasilitas'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fotofasilitas = FotoFasilitas::findOrFail($id);
        $fasilitas     = Fasilitas::all();
        return view('fotofasilitas.edit', compact('fotofasilitas', 'fasilitas'));
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

            'foto'         => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
            'id_fasilitas' => 'required',
        ]);

        $fotofasilitas               = FotoFasilitas::findOrFail($id);
        $fotofasilitas->id_fasilitas = $request->id_fasilitas;

        if ($request->hasFile('foto')) {
            $fotofasilitas->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/fotofasilitas', $name);
            $fotofasilitas->foto = $name;
        }

        $fotofasilitas->save();
        return redirect()->route('fotofasilitas.index')->with('success', 'data berhasil di rubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotofasilitas = fotofasilitas::findOrFail($id);
        $fotofasilitas->delete();
        return redirect()->route('fotofasilitas.index')->with('success', 'Data Berhasil Dihapus');

    }
}
