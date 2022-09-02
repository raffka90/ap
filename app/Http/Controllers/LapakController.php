<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapak;

class LapakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $lapak = Lapak::all();
        return view('page.lapak.index', compact('lapak','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.lapak.form');
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
            $namaFile = $request->no.".".$ext;
            $simpan = $request->foto->move('berkas',$namaFile);


        $lapak = new Lapak;

        $lapak->no_lapak = $request->no;
        $lapak->jenis_lapak = $request->jenis;
        $lapak->harga = $request->harga;
        $lapak->unit = $request->unit;
        if($request->has('foto'))
        {
            $lapak->foto = $namaFile;
        }
        $lapak->save();

        return redirect('/lapak');
    }

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
        $lapak = Lapak::find($id);
        return view('page.lapak.edit', compact('lapak'));
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
        $lapak = Lapak::find($id);

        $lapak->no_lapak = $request->no;
        $lapak->jenis_lapak = $request->jenis;
        $lapak->harga = $request->harga;
        $lapak->unit = $request->unit;
        $lapak->save();

        return redirect('/lapak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lapak = Lapak::find($id);
        $lapak->delete();

        return redirect('/lapak');
    }
}
