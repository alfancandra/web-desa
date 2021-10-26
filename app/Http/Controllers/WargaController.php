<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $warga = Warga::all();
        return view('warga.index',compact('warga'));
    }

    public function add()
    {
        return view('warga.add');
    }

    public function store(Request $request)
    {
        // Validasi data
        $this->validate(request(), [
            'nik' => 'required|min:16',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'dob' => 'required',
            'jk' => 'required',
            'pendidikan' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        // Store user data to database
        try {
            $warga = Warga::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'dob' => $request->dob,
                'jk' => $request->jk,
                'pendidikan' => $request->pendidikan,
                'agama' => $request->agama,
                'pekerjaan' => $request->pekerjaan,
                'ayah' => $request->ayah,
                'ibu' => $request->ibu,
            ]);

            return redirect()->route('warga')->with(['success' => 'Sukses Tambah Data.']);
        } catch (QueryException $e) {
            return redirect()->route('addwarga')->with(['error' => $e->errorInfo]);
        }
    }
}
