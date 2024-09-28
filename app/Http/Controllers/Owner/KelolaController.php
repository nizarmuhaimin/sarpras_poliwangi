<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Sarana;
use App\Models\TambahSarpras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaController extends Controller
{
    public function kelolaData(){
        $user = Auth::user();
        $kelola ['allDataKelola'] = Sarana::all();
        // dd($kelola);
        // $kelola = $kelola->sortByDesc('id');
        // return view('owner.kelola_data', ['kelola' => $kelola]);
        // $kelola = collect($kelola)->sortByDesc('id');
        // dd($kelola);
        // return view('owner.kelola_data', ['kelola' => $kelola]);

        return view('owner.kelola_data', $kelola);
    }

    public function tambahSarana(){
        // $user = Auth::user();
        // $data['allDataMobil'] = mobil::all();
        // return view('owner.mobil_list', compact('user'));
        return view('owner.tambah_sarana');
    }
    public function tambahPrasarana(){
        // $user = Auth::user();
        // $data['allDataMobil'] = mobil::all();
        // return view('owner.mobil_list', compact('user'));
        return view('owner.tambah_prasarana');
    }
    public function tambahKendaraan(){
        // $user = Auth::user();
        // $data['allDataMobil'] = mobil::all();
        // return view('owner.mobil_list', compact('user'));
        return view('owner.tambah_kendaraan_dinas');
    }
    
    public function saranaCreate(Request $request){
                
        $id = Auth::user();
           
            $extension = $request->file('photo')->getClientOriginalExtension(); //mengambil extensi asli file
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;  //rename file
            $request->file('photo')->storeAs('public', $newName); //path file
            $tambah_sarana = new Sarana();
            $tambah_sarana -> nama = $request->nama;
            $tambah_sarana -> sarana_photo_path=$newName;
            $tambah_sarana -> deskripsi = $request->deskripsi;       
            $tambah_sarana ->  save();
            return Redirect()->route('owner.kelola_data');
          
        
    }
    }