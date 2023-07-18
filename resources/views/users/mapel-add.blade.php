@extends('layouts.user')
 
@section('title', 'Matapelajaran')

@section('content')
    <h2>Daftar Matapelajaran</h2>
    <a href="" class="btn btn-primary">Add Data</a>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="forms-sample" action="mapel-create" method="POST">
        @csrf
        <div class="form-group">
          <label for="mapel_kode" class="form-label">Kode Matapelajaran</label>
          <input type="text" class="form-control" id="mapel_kode" name="mapel_kode">
        </div>
        <div class="form-group">
          <label for="mapel_nama" class="form-label">Nama Matapelajaran</label>
          <input type="text" class="form-control" id="mapel_nama" name="mapel_nama">
        </div>
        <div class="form-group">
            <label for="mapel_tingkat" class="form-label">Tingkat</label>
            <select class="form-select" id="mapel_tingkat" name="mapel_tingkat">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
          </div>
          <div class="form-group">
            <label for="mapel_jp" class="form-label">Jam Matapelajaran</label>
            <input type="text" class="form-control" id="mapel_jp" name="mapel_jp">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection