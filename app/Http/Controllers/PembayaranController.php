<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Pedagang;
use App\Models\Lapak;
use DB;


class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pembayaran = Pembayaran::all();
        return view('page.pembayaran.index', compact('pembayaran','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pedagang = Pedagang::all();
        $lapak = Lapak::all();

        $q=DB::table('pembayarans')->select(DB::raw('MAX(RIGHT(no_pembayaran,4)) as bayar'));;
        $bayar="";
        if($q->count()>0)
        {
            foreach($q->get()as $b)
            {
                $tmp =((int)$b->bayar)+1;
                $bayar = sprintf("%04s",$tmp);
            }

        }
        else{
            $bayar ="0001";
        }


        return view('page.pembayaran.form',compact('lapak','bayar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lapak =Lapak::where('jenis_lapak','=',$request->jenis)->get();


        $pembayaran = new Pembayaran;

        $pembayaran->no_pembayaran = $request->bayar;
        $pembayaran->nama = $request->nama;
        $pembayaran->lapaks_id =$lapak[0]->id;
     
        $pembayaran->tanggal_bayar = $request->tanggal;
        // $pembayaran->no_hp = $request->hp;
        // $pembayaran->alamat = $request->alamat;
        
        $pembayaran->save();

        return redirect('/pembayaran');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function laporan(){
        $pembayaran = Pembayaran::all();
        return view('page.pembayaran.laporan',compact('pembayaran'));
    }

    public function print($id){

        $pembayaran= Pembayaran::find($id);
        return view('page.pembayaran.struk',compact('pembayaran'));
    }

     
}
