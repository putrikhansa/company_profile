<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\fasilitas;
use App\Models\Prestasi;
use App\Models\FotoFasilitas;
use App\Models\ukm;

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
    public function detailprestasi($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('detailprestasi', compact('prestasi'));
        
    }
    public function detailfakul($id)
    {
        $fakultas = Fakultas::findOrFail($id);

        return view('detailfakul', compact('fakultas'));
        
    }

    public function detailfasilitas($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fotofasilitas = FotoFasilitas::where('nama_fasilitas', $fasilitas->id)->get();

        return view('detailfasilitas', compact('fasilitas', 'fotofasilitas'));
        
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
        $ukm = Ukm::all();
        return view('ukm', compact('ukm'));

    }

    public function prestasi()
    {
        $prestasi = Prestasi::all();
        return view('prestasi', compact('prestasi'));
    }

    public function fasilitas(Request $request)
    {
        $fasilitas = Fasilitas::all();
        // return view('fasilitas', compact('fasilitas'));
        // $fasilitas = Fasilitas::all('fotofasilitas')->get();

        return view('fasilitas', compact ('fasilitas'));    
    }

}
