<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prasarana;
class PrasaranaController extends Controller
{
    public function viewPrasarana()
    {
        // $username['namauser']= Auth::user();
        $data['allDataPrasarana'] = Prasarana::all();
        // return dd($username);
        return view('user.prasarana',$data);
        // return view('user.homepage', $data,$username);
    }
    public function viewProyektor()
    {  
        return view('user.prasarana_proyektor');
    }
    public function detailPrasarana()
    {
        return view('user.detail_prasarana');
    }

    public function peminjamanPrasarana()
    {
        return view('user.peminjaman_prasarana');
    }

    public function pengembalianPrasarana()
    {
        return view('user.pengembalian_prasarana');
    }
    
}

    

