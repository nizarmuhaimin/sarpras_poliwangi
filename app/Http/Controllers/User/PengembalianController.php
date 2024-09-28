<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengembalianSarpras;
use App\Models\PengembalianKendaraan;

class PengembalianController extends Controller
{
    public function PengembalianSarpras(Request $request){
            
        // $user_id = Auth::user();
        // $validateData = $request->validate([
        //     'user_id' => 'required',
        // ]);
        // dd ($user_id);
        $pengembalian_sarpras = new PengembalianSarpras();

            // $pengembalian_sarpras -> id =$request->id;
            $pengembalian_sarpras -> nim =$request->nim;
            $pengembalian_sarpras -> kegiatan = $request->kegiatan;
            $pengembalian_sarpras -> tempat_kegiatan = $request->tempat_kegiatan;
            $pengembalian_sarpras -> tgl_waktu_peminjaman = $request->tgl_waktu_peminjaman;
            $pengembalian_sarpras -> tgl_waktu_pengembalian = $request->tgl_waktu_pengembalian;
            $pengembalian_sarpras -> nama_user = $request->nama_user;
            $pengembalian_sarpras -> email_user = $request->email_user;
            $pengembalian_sarpras -> status = $request->status;
            $pengembalian_sarpras -> users_id = $request->users_id;
            $pengembalian_sarpras -> sarpras_id = $request->sarpras_id;
            $pengembalian_sarpras -> foto_akhir = $request->foto_akhir;
            $pengembalian_sarpras -> jenis = $request->jenis;
            $pengembalian_sarpras->save();
        // return view ('user.sewa_list', compact('user_id'));
        return Redirect()->route('user.home');

    }
    public function PengembalianKendaraan(Request $request){
            
        // $user_id = Auth::user();
        // $validateData = $request->validate([
        //     'user_id' => 'required',
        // ]);
        // dd ($user_id);
        $pengembalian_kendaraan = new PengembalianKendaraan();

            // $pengembalian_kendaraan -> id =$request->id;
            $pengembalian_kendaraan -> nim =$request->nim;
            $pengembalian_kendaraan -> kegiatan = $request->kegiatan;
            $pengembalian_kendaraan -> tujuan = $request->tujuan;
            $pengembalian_kendaraan -> SIM_KTP = $request->SIM_KTP;
            $pengembalian_kendaraan -> tgl_waktu_peminjaman = $request->tgl_waktu_peminjaman;
            $pengembalian_kendaraan -> tgl_waktu_pengembalian = $request->tgl_waktu_pengembalian;
            $pengembalian_kendaraan -> nama_user = $request->nama_user;
            $pengembalian_kendaraan -> email_user = $request->email_user;
            $pengembalian_kendaraan -> status = $request->status;
            $pengembalian_kendaraan -> users_id = $request->users_id;
            $pengembalian_kendaraan -> kendaraan_id = $request->kendaraan_id;
            $pengembalian_kendaraan -> foto_akhir = $request->foto_akhir;
            $pengembalian_kendaraan -> jenis = $request->jenis;
            $pengembalian_kendaraan->save();
        // return view ('user.sewa_list', compact('user_id'));
        return Redirect()->route('user.home');
}
}