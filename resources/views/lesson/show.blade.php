@extends('layouts.master')

@section('judul', 'Mata Kuliah')
@section('content')
<h5>Mata Kuliah {{ $lesson->lesson }} Memiliki SKS {{ $lesson->sks }}</h5>
<br><br>
<a href="/lesson">
    <button type="button" class="btn btn-info">Kembali</button>
</a>
@endsection
