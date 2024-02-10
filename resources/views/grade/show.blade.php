@extends('layouts.master')

@section('judul', 'Fakultas')
@section('content')
    <h5>Mahasiswa Atas Nama {{ $grade->name }} Memperoleh Nilai {{ $grade->grade }}</h5>
    <br><br>
    <a href="/grade" style="text-decoration: none;">
        <button type="button" class="btn btn-info">Kembali</button>
    </a>
@endsection
