@extends('layouts.user')
 
@section('title', 'Matapelajaran')

@section('content')
    <h2>Daftar Matapelajaran</h2>
    <a href="mapel-add" class="btn btn-primary">Add Data</a>
    <table  class="table">
        <thead>
        <tr><th>Kode</th><th>Nama</th><th>Tingkat</th><th>Jam</th><th>Edit Data</th></tr>
        </thead>
        <tbody>
    @foreach($list as $data)
        <tr><td>{{$data->mapel_kode}}</td><td>{{$data->mapel_nama}}</td><td>{{$data->mapel_tingkat}}</td><td>{{$data->mapel_jp}}</td><th><a href="mapel-edit/{{$data->id}}">Edit</a></th></tr>
    @endforeach
        </tbody>
    </table>
@endsection