<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Storage;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::orderBy('id', 'desc')->get();
        return view('dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen             = new Dosen();
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->telepon    = $request->telepon;
        $dosen->email      = $request->email;
        $dosen->jabatan    = $request->jabatan;
        $dosen->status     = $request->status;

        // Set default foto (harus ada file ini di storage/dosen/default.jpg)

        if ($request->hasFile('foto')) {
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/dosen', $name);
            $dosen->foto = $name;
        }

        $dosen->save();
        return redirect()->route('dosen.index')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
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
            'nama_dosen' => 'required',
            'telepon'    => 'required',
            'email'      => 'required',
            'jabatan'    => 'required',
            'status'     => 'required',
            'foto'       => 'nullable|mimes:jpg,png,jpeg,webp,avif|max:9999',
        ]);
        $dosen             = Dosen::findOrFail($id);
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->telepon    = $request->telepon;
        $dosen->email      = $request->email;
        $dosen->jabatan    = $request->jabatan;
        $dosen->status     = $request->status;

        if ($request->hasFile('foto')) {
            $dosen->deleteImage();
            $img  = $request->file('foto');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('storage/dosen', $name);
            $dosen->foto = $name;
        }

        $dosen->save();
        return redirect()->route('dosen.index')->with('success', 'data berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Data Berhasil Dihapus');
    }
}
