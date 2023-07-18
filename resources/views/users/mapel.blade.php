@extends('layouts.user')
 
@section('title', 'Matapelajaran')

@section('content')
    <h2>Daftar Matapelajaran</h2>
    <a href="mapel-add" class="btn btn-primary">Add Data</a>
    @if(Session::has('message'))
        <div class="alert alert-primary alert-dismissible" role="alert">{{Session::get('message')}}</div>
    @endif
    <table  class="table table-hover">
        <thead>
        <tr><th>Kode</th><th>Nama</th><th>Tingkat</th><th>Jam</th><th>Edit Data</th><th>Hapus Data</th></tr>
        </thead>
        <tbody>
    @foreach($list as $data)
        <tr>
            <td>{{$data->mapel_kode}}</td>
            <td>{{$data->mapel_nama}}</td>
            <td>{{$data->mapel_tingkat}}</td>
            <td>{{$data->mapel_jp}}</td><td><a href="mapel-edit/{{$data->id}}">Edit</a></td>
            <td><a href="mapel-drop/{{$data->id}}">Hapus</a></td>
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection