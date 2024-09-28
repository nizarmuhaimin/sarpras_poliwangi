<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaranaController extends Controller
{
    public function viewSarana()
    {
        // $username['namauser']= Auth::user();
        $data['allDataSarana'] = Sarana::all();
        // return dd($username);
        return view('user.sarana',$data);
        // return view('user.homepage', $data,$username);
    }

    public function detailSarana()
    {
        return view('user.detail_sarana');
    }

    public function peminjamanSarana()
    {
        return view('user.peminjaman_sarana');
    }

    public function pengembalianSarana()
    {
        return view('user.pengembalian_sarpras');
    }

    public function saranaStore(Request $request){
        $user_id = Auth::user();
        // nama fiel sesuai yang di setup
        $extension = $request->file('photo')->getClientOriginalExtension(); //mengambil extensi asli file
        $newName = $request->nama_mobil.'-'.now()->timestamp.'.'.$extension;  //rename file
        $request->file('photo')->storeAs('public', $newName); //path file

        // nama file random
        // return $path = $request->file('photo')->store('mobil'); //nama file random
        $validateData = $request->validate([
            
            // 'user_id' => 'required',
            'nama_mobil' => 'required',
            'deskripsi' => 'required',
            'photo' => 'required',
        ]);


        $sarana= new Sarana();
        $sarana->nama=$request->nama_mobil;
        $sarana->deskripsi=$request->deskripsi;
        $sarana->sarana_photo_path=$newName;
        
        $sarana->save();


        return redirect()->route('owner.kelola_data');
    
    }
}
