<?php
namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dosen;

class FrontController extends Controller
{

    public function about()
    {
        return view('about');
    }

    public function index()
    {

        $dosen = Dosen::all();
        return view('welcome', compact('dosen'));

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
}
