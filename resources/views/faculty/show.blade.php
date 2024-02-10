@extends('layouts.master')

@section('judul', 'Fakultas')
@section('content')
    <h5>Data Fakultas {{ $faculty->faculty }} dengan Program Keahlian {{ $faculty->major }}</h5>
    <br><br>
    <a href="/faculty" style="text-decoration: none;">
        <button type="button" class="btn btn-info">Kembali</button>
    </a>
@endsection
