<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedagang;
use App\Models\Lapak;

class PedagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $pedagang = Pedagang::where('nama','LIKE','%'.$request->search.'%')->get();
        }else{
            $pedagang = Pedagang::all();
        }


        $nomor = 1;
        // $pedagang = Pedagang::all();
        return view('page.pedagang.index', compact('pedagang','nomor','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lapak = Lapak::all();
        return view('page.pedagang.form',compact('lapak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
            $ext = $request->foto->extension();
            $fotoktp = $request->nama.".".$ext;
            $simpan = $request->foto->move('berkas2',$fotoktp);



        $pedagang = new Pedagang;

        $pedagang->nama = $request->nama;
        $pedagang->tanggal_sewa = $request->sewa;
        $pedagang->tanggal_akhir = $request->akhir;
        $pedagang->no_hp = $request->hp;
        $pedagang->lapaks_id = $request->lapak;
        $pedagang->alamat = $request->alamat;

        if($request->has('foto'))
        {
            $pedagang->foto = $fotoktp;
        }
       
        $pedagang->save();

        return redirect('/surat/'.$pedagang->id);
    }
        // $mhs = new Mahasiswa;

        // $mhs->nim = $request->nim;
        // $mhs->nama = $request->nama;
        // $mhs->tempat_lahir = $request->tempat;
        // $mhs->tanggal_lahir = $request->tanggal;
        // $mhs->jurusans_id = $request->jurusan;
        // $mhs->jk = $request->jk;
        // $mhs->agama = $request->agama;
        // $mhs->email = $request->email;
        // $mhs->save();

        // return redirect('/mahasiswa');
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedagang = Pedagang::find($id);
        $lapak = Lapak::all();
        return view ('page.pedagang.edit', compact('pedagang','lapak'));


        // $mhs = Mahasiswa::find($id);
        // $jurusan = Jurusan::all();
        // return view ('page.mahasiswa.edit', compact('mhs','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pedagang = Pedagang::find($id);

        // $pedagang->nim = $request->nim;
        $validasi = $request->validate(
            [
                'foto' => 'required|file|mimes:png,jpg,jpeg',
            ]
            );
            $ext = $request->foto->extension();
            $fotofile = $request->nama.".".$ext;
            $simpan = $request->foto->move('berkas2',$fotofile);


        $pedagang->nama = $request->nama;
        $pedagang->tanggal_sewa = $request->sewa;
        $pedagang->tanggal_akhir = $request->akhir;
        $pedagang->no_hp = $request->hp;
        $pedagang->alamat = $request->alamat;
        if($request->has('foto'))
        {
            $pedagang->foto = $fotofile;
        }
        $pedagang->lapaks_id = $request->lapak;
        $pedagang->save();

        return redirect('/pedagang');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedagang = Pedagang::find($id);
        $pedagang->delete();

        return redirect('/pedagang');
    }

    public function pedagang(){
        $pedagang = Pedagang::all();
        return view('page.pedagang.laporan_pedagang',compact('pedagang'));
    }

    public function surat($id){
        $pedagang = Pedagang::find($id);
        return view('page.pedagang.surat',compact('pedagang'));
    }
}
