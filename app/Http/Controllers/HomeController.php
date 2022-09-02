<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pedagang;
use App\models\Lapak;
use App\models\Pembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_pedagang = Pedagang::all()->count();
        $data_lapak = Lapak::all()->count();
        $data_pembayaran = Pembayaran::all()->count();
        return view('home',compact('data_pedagang','data_lapak','data_pembayaran'));
        // return view('home');
    }
}
