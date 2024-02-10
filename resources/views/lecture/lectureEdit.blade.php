@extends('layouts.master')
@section('judul','Lecture Edit Form')
@section('content')
    
<form action="/api/lecture/{{ $datas[0]->id }}/edit" method="post"> 
    @csrf
    <div class="form-group">
        <input type="hidden" name=nipsid class="form-control" value="{{ $datas[0]->nipsid }}">
    </div><br>
    <div class="form-group">
        <label>NIP :</label>
        <input type="text" name=nipsnip class="form-control @error('nipsnip') is-invalid @enderror" value="{{ $datas[0]->kodenip }}" required>
        @error('nipsnip') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div><br>
    <div class="form-group">
        <label>Nama Lengkap :</label>
        <input type="text" name=nipsName class="form-control @error('nipsName') is-invalid @enderror" value="{{ $datas[0]->name }}" required>
        @error('nipsName') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div><br>
    <div class="form-group">
        <label>Nomor HP :</label>
        <input type="text" name=lecturersPhone class="form-control @error('lecturersPhone') is-invalid @enderror" value="{{ $datas[0]->phone_number }}" required>
        @error('lecturersPhone') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div><br>
    <div class="form-group">
        <label>Alamat :</label>
        <input type="text" name=lecturersAddress class="form-control @error('lecturersAddress') is-invalid @enderror" value="{{ $datas[0]->address }}" required>
        @error('lecturersAddress') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div><br>
    <!-- <input type="submit" value="Sign Up"> -->
    <!-- atau -->
    <button type="submit">Simpan Perubahan</button>
</form>
@endsection

