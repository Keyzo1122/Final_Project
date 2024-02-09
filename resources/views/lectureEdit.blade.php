@extends('layouts.master')
@section('judul','Welcome')
@section('content')
    
<form action="/cast/{{ $cast->id }}" method="post">
    @method('put');
    @csrf
    <div class="form-group">
        <label>Nama :</label>
        <input type="text" name=castName class="form-control @error('castName') is-invalid @enderror" value="{{ $cast->nama }}" required>
        @error('castName') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>Umur :</label>
        <input type="text" name=castUmur class="form-control  @error('castUmur') is-invalid @enderror" value="{{ $cast->umur }}" required>
        @error('castUmur') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <div class="form-group">
        <label>Biografi :</label>
        <input type="text" name=castBio class="form-control @error('castBio') is-invalid @enderror" value="{{ $cast->bio }}" required>
        @error('castBio') <div class="alert alert-danger">{{ $message }}</div>@enderror
    </div>
    <!-- <input type="submit" value="Sign Up"> -->
    <!-- atau -->
    <button type="submit">Sign Up</button>
</form>
@endsection

