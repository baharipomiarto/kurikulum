<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Mapel;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Session;

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
        $messages = [
            'required' => 'The :attribute harus diisi.',
            'unique' => 'The :attribute :input sudah ada.',
            'numeric' => 'The :attribute hasus bernilai angka.',
        ];
        $request->validate([
            'mapel_kode' => 'required|unique:mapels',
            'mapel_nama' => 'required',
            'mapel_jp' => 'numeric',
        ],$messages);

        $mapel = new Mapel;
        $mapel->mapel_kode = $request->mapel_kode;
        $mapel->mapel_nama = $request->mapel_nama;
        $mapel->mapel_tingkat = $request->mapel_tingkat;
        $mapel->mapel_jp = $request->jp;
        if ($mapel->save()){
            $request->session()->flash('message', 'Data Berhasil ditambahkan');
        }else{
            $request->session()->flash('message', 'Data Gagal ditambahkan');
        }
        return redirect('/mapel');
    }
    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('users.mapel-edit',['list'=>$mapel]);
    }
    public function save(Request $request, $id)
    {
        $messages = [
            'required' => 'The :attribute harus diisi.',
            'unique' => 'The :attribute :input sudah ada.',
            'numeric' => 'The :attribute hasus bernilai angka.',
        ];
        $request->validate([
            'mapel_kode' => 'required|unique:mapels',
            'mapel_nama' => 'required',
            'mapel_jp' => 'numeric',
        ],$messages);

        $mapel = Mapel::find($id);
        $mapel->mapel_kode = $request->mapel_kode;
        $mapel->mapel_nama = $request->mapel_nama;
        $mapel->mapel_tingkat = $request->mapel_tingkat;
        $mapel->mapel_jp = $request->mapel_jp;
        if ($mapel->save()){
            $request->session()->flash('message', 'Data Berhasil Disimpan');
        }else{
            $request->session()->flash('message', 'Data Gagal Disimpan');
        }
        return redirect('/mapel');
    }
}
