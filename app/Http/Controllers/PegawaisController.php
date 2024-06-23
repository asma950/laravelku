<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\Pegawais;

class PegawaisController extends Controller
{
   
   
    public function index(){
 
        // menampilkan 20 data pegawai per halaman
        $pegawais = Pegawais::paginate(20);
        // mengirim data pegawai ke view pegawai
        return view('pegawais', ['pegawais' => $pegawais]);
         
        }

        public function tambah(){
            return view('pegawais_tambah');
       }
       public function store(Request $request)
       {
           $this->validate($request, [
               'nama' => 'required',
               'alamat' => 'required'
           ]);
       
           Pegawais::create([
               'nama' => $request->nama,
               'alamat' => $request->alamat
           ]);
       
           return redirect('/pegawais');
       }
       public function edit($id)
{
   $pegawais = Pegawais::find($id);
   return view('pegawais_edit', ['pegawais' => $pegawais]);
}
public function update($id, Request $request)
{
    $this->validate($request, [
        'nama' => 'required',
        'alamat' => 'required'
    ]);

    $pegawais = Pegawais::find($id);
    $pegawais->nama = $request->nama;
    $pegawais->alamat = $request->alamat;
    $pegawais->save();
    return redirect('/pegawais');
}
public function delete($id)
{
    $pegawais = Pegawais::find($id);
    $pegawais->delete();
    return redirect('/pegawais');
}
        
         
        

    
}