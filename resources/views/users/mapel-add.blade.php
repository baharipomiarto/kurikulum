@extends('layouts.user')
 
@section('title', 'Matapelajaran')

@section('content')
    <h2>Daftar Matapelajaran</h2>
    <a href="" class="btn btn-primary">Add Data</a>
    <form class="forms-sample" action="mapel-create" method="POST">
        @csrf
        <div class="form-group">
          <label for="kode" class="form-label">Kode Matapelajaran</label>
          <input type="text" class="form-control" id="kode" name="kode">
        </div>
        <div class="form-group">
          <label for="nama" class="form-label">Nama Matapelajaran</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="tingkat" class="form-label">Tingkat</label>
            <select class="form-select" id="tingkat" name="tingkat">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jp" class="form-label">Jam Matapelajaran</label>
            <input type="text" class="form-control" id="jp" name="jp">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection