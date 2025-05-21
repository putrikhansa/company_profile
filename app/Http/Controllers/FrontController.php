<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\fasilitas;
use App\Models\Prestasi;
use Illuminate\Http\Request;


class FrontController extends Controller
{

    public function tentang()
    {
        return view('tentang');
    }


    public function index()
    {

        $dosen    = Dosen::all();
        $fakultas = Fakultas::all();
        $artikel  = Artikel::all();
        $prestasi = Prestasi::all();

        return view('welcome', compact('fakultas', 'dosen', 'artikel', 'prestasi'));

    }
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('detail', compact('artikel'));
    }

    public function dosen()
    {
        $dosen = Dosen::all();
        return view('dosen', compact('dosen'));

    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view('artikel', compact('artikel'));

    }

    public function fakultas()
    {
        $fakultas = Fakultas::all();
        return view('fakultas', compact('fakultas'));

    }

    public function ukm()
    {
        $ukm = Fakultas::all();
        return view('ukm', compact('ukm'));

    }

    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('prestasi', compact('prestasi'));
    }

    public function fasilitas(Request $request)
    {
        // $fasilitas = Fasilitas::all();
        // return view('fasilitas', compact('fasilitas'));
        $fasilitas = Fasilitas::where('fasilitas')->get();
        return view('fasilitas', compact('fasilitas'));
    }

}
