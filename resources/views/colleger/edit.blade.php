@extends('layouts.master')

@section('judul')
    Edit Data
@endsection

@section('content')
<form action="/colleger/{{$colleger->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
  <div class="form-group">
    <label>Nomer Induk Mahasiswa</label>
    <input type="text" name="nim" class="form-control" value="{{$colleger->nim}}">
  </div>
  @error('nim')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="name" class="form-control" value="{{$colleger->name}}">
  </div>
  @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="address" cols="30" rows="5">{{$colleger->address}}</textarea>
  </div>
  @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection