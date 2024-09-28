<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PeminjamanForm;
use App\Models\PeminjamanKendaraan;

class PeminjamanController extends Controller
{
    public function pinjamSarpras(Request $request){
            
        // $user_id = Auth::user();
        // $validateData = $request->validate([
        //     'user_id' => 'required',
        // ]);
        // dd ($user_id);
        $peminjaman_forms = new PeminjamanForm();

            // $peminjaman_forms -> id =$request->id;
            $peminjaman_forms -> nim =$request->nim;
            $peminjaman_forms -> kegiatan = $request->kegiatan;
            $peminjaman_forms -> tempat_kegiatan = $request->tempat_kegiatan;
            $peminjaman_forms -> tgl_waktu_peminjaman = $request->tgl_waktu_peminjaman;
            $peminjaman_forms -> tgl_waktu_pengembalian = $request->tgl_waktu_pengembalian;
            $peminjaman_forms -> nama_user = $request->nama_user;
            $peminjaman_forms -> email_user = $request->email_user;
            $peminjaman_forms -> status = $request->status;
            $peminjaman_forms -> users_id = $request->users_id;
            $peminjaman_forms -> sarana_id = $request->sarana_id;
            $peminjaman_forms -> foto_awal = $request->foto_awal;
            $peminjaman_forms -> jenis = $request->jenis;
            $peminjaman_forms->save();
        // return view ('user.sewa_list', compact('user_id'));
        return Redirect()->route('user.home');

    }
    public function pinjamKendaraan(Request $request){
            
        // $user_id = Auth::user();
        // $validateData = $request->validate([
        //     'user_id' => 'required',
        // ]);
        // dd ($user_id);
        $pinjamkendaraan = new PeminjamanKendaraan();

            // $pinjamkendaraan -> id =$request->id;
            $pinjamkendaraan -> nim =$request->nim;
            $pinjamkendaraan -> kegiatan = $request->kegiatan;
            $pinjamkendaraan -> tujuan = $request->tujuan;
            $pinjamkendaraan -> SIM_KTP = $request->SIM_KTP;
            $pinjamkendaraan -> tgl_waktu_peminjaman = $request->tgl_waktu_peminjaman;
            $pinjamkendaraan -> tgl_waktu_pengembalian = $request->tgl_waktu_pengembalian;
            $pinjamkendaraan -> nama_user = $request->nama_user;
            $pinjamkendaraan -> email_user = $request->email_user;
            $pinjamkendaraan -> status = $request->status;
            $pinjamkendaraan -> users_id = $request->users_id;
            $pinjamkendaraan -> kendaraan_id = $request->kendaraan_id;
            $pinjamkendaraan -> foto_awal = $request->foto_awal;
            $pinjamkendaraan -> jenis = $request->jenis;
            $pinjamkendaraan->save();
        // return view ('user.sewa_list', compact('user_id'));
        return Redirect()->route('user.home');

    }
}
