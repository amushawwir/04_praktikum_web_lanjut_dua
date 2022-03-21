<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\Pegawai;


class PegawaiController extends Controller
{
    public function index()
    {
    	// // mengambil data pegawai
    	// $pegawai = Pegawai::all();

        // // mengambil data pegawai awal
    	// $pegawai = Pegawai::first();

        // // mengambil data pegawai awal
    	// $pegawai = Pegawai::find(1);

        // // Seleksi data dengan where
    	// $pegawai = Pegawai::where('nama', 'Lamar Gunawan')->get(); 

        // // Seleksi data dengan where (id)
    	// $pegawai = Pegawai::where('id', '>=', 10)->get(); 

        // // Pencarian nama spesifik
    	// $pegawai = Pegawai::where('nama', 'like', '%a%')->get(); 

        // Paginate
    	$pegawai = Pegawai::paginate(5); 


    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

}