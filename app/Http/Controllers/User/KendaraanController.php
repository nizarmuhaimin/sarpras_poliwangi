<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function viewKendaraan()
    {
        // $username['namauser']= Auth::user();
        $data['allDataKendaraan'] = Kendaraan::all();
        // return dd($username);
        return view('user.kendaraan',$data);
        // return view('user.homepage', $data,$username);
    }

    public function peminjamanKendaraan()
    {
        return view('user.peminjaman_kendaraan');
    }

    public function pengembalianKendaraan()
    {
        return view('user.pengembalian_Kendaraan');
    }
}
