@extends('layouts.master')

@section('judul')
    Detail Mahasiswa
@endsection

@section('content')
<form action="/colleger/{{$colleger->id}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Nomer Induk Mahasiswa</label>
    <input type="text" name="nim" class="form-control" value="{{$collegers->nim}}">
  </div>
  <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="name" class="form-control" value="{{$collegers->name}}">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="ringkasan" cols="30" rows="5">{{$collegers->address}}</textarea>
  </div>

<a href="/collegers" class="btn btn-secondary btn-sm">Kembali</a>
@endsection

