@extends('layouts.user')
 
@section('title', 'Matapelajaran')

@section('content')
    <h2>Daftar Matapelajaran</h2>
    <a href="" class="btn btn-primary">Add Data</a>
    <form class="forms-sample" action="/mapel-save/{{$list->id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="mapel_kode" class="form-label">Kode Matapelajaran</label>
          <input type="text" class="form-control" id="mapel_kode" name="mapel_kode" value="{{$list->mapel_kode}}">
        </div>
        <div class="form-group">
          <label for="mapel_nama" class="form-label">Nama Matapelajaran</label>
          <input type="text" class="form-control" id="mapel_nama" name="mapel_nama" value="{{$list->mapel_nama}}">
        </div>
        <div class="form-group">
            <label for="mapel_tingkat" class="form-label">Tingkat</label>
            <select class="form-select" id="mapel_tingkat" name="mapel_tingkat">
                @if ($list->mapel_tingkat == "X")
                    <option value="X" selected>X</option>
                @else
                    <option value="X">X</option>
                @endif
                @if ($list->mapel_tingkat == "XI")
                    <option value="XI" selected>XI</option>
                @else
                    <option value="XI">XI</option>
                @endif
                @if ($list->mapel_tingkat == "XII")
                    <option value="XII" selected>XII</option>
                @else
                    <option value="XII">XII</option>
                @endif
            </select>
          </div>
          <div class="form-group">
            <label for="mapel_jp" class="form-label">Jam Matapelajaran</label>
            <input type="text" class="form-control" id="mapel_jp" name="mapel_jp" value="{{$list->mapel_jp}}">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection