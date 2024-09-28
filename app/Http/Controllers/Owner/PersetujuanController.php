<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeminjamanForm;
use Illuminate\Support\Facades\Auth;


class PersetujuanController extends Controller
{
    public function persetujuanPeminjaman(){
        $user = Auth::user();
        $data['allDataPinjam'] = PeminjamanForm::all();
        // dd($data);
        return view('owner.persetujuan', $data);
        // return view('owner.persetujuan');
    }
}
