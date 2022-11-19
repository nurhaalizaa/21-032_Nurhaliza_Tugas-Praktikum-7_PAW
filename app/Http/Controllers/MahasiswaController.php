<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use GuzzleHttp\Psr7\Request;

class MahasiswaController extends Controller
{

    public function awal()
    {
       return view('home',
       ['title' => 'Data Mahasiswa'],[
        'data' => Mahasiswa::all()
       ]
    );
    }

    public function tambah()
    {
       return view('tambah',
       ['title' => 'Input Data']);
    }

    public function tambahAction(StoreMahasiswaRequest $request){
    //    dd($request->except('_token','submit'));
        Mahasiswa::create($request->except('_token','submit'));
        return redirect()->route('awal');
    }

    public function edit($id)
    {
        $mahasiswa=Mahasiswa::find($id) ;
        return view('edit',compact(['mahasiswa']),['title' => 'Tambah Data']);
    }

    public function update($id, StoreMahasiswaRequest $request)
    {
        $mahasiswa=Mahasiswa::find($id) ;
        $mahasiswa->update($request->except(['_token','submit']));
        return redirect()->route('awal');

    }

    public function destroy($id)
    {
        $mahasiswa=Mahasiswa::find($id) ;
        $mahasiswa->delete();
        return redirect()->route('awal');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about',['title' => 'About Me']);
    }
    
}
