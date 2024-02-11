@extends('layouts.master')

@section('judul')
    Halaman Tambah Mahasiswa
@endsection

@section('content')

<form action="/colleger" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label>Nomer Induk Mahasiswa</label>
    <input type="text" name="nim" class="form-control">
  </div>
  @error('nim')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" class="form-control" name="name">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="address" cols="30" rows="5"></textarea>
  </div>
  @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection