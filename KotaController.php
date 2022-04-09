<?php

namespace App\Http\Controllers;

use App\kota;
use App\negara;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index(){
        
        return view('kota.crudkota',[
            'cities' => Kota::with('negara')->latest()->get(),
            'countries' => Negara::latest()->get()
        ]);
    }

    public function add(){

        return view('kota.addkota',[
            'cities' => Kota::with('negara')->latest()->get(),
            'countries' => Negara::latest()->get()
        ]);
    }

    public function addProccess(Request $request)
    {
        Kota::create([
            'nama' => $request->nama,
            'negara_id' => $request->negara_id,]);

        return redirect('kota')->with('success', 'Berhasil Tambah Data Kota!');
    }

    public function edit($id){
        return view('kota.editkota',[
            'cities' => Kota::with('negara')->latest()->get(),
            'countries' => Negara::latest()->get(),
        ]);
    }

    public function editProccess(Request $request, $id){
       Kota::where('id', $id)->update([
            'nama' => $request->nama,
            'negara_id' => $request->negara_id,
        ]);
        return redirect('kota/')->with('success', 'Berhasil Edit Data Kota!');
    }

    public function delete($id){
        Kota::destroy($id);
        return redirect('kota');
    }
}
