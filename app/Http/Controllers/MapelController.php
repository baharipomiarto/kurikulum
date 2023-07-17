<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::all();
        return view('users.mapel',['list'=>$mapel]);
    }
    public function add()
    {
        return view('users.mapel-add');
    }
    public function create(Request $request)
    {
        //dd($request->all());
        $mapel = new Mapel;
        $mapel->mapel_kode = $request->kode;
        $mapel->mapel_nama = $request->nama;
        $mapel->mapel_tingkat = $request->tingkat;
        $mapel->mapel_jp = $request->jp;
        $mapel->save();
        return redirect('/mapel');
    }
}
