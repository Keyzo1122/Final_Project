@extends('layouts.master')

@section('judul', 'Mata Kuliah')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit Data {{ $faculty->faculty }}</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="/faculty/{{ $faculty->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="faculty">Fakultas</label>
                                    <input type="text" name="faculty" class="form-control" id="faculty"
                                        placeholder="Masukan Data Fakultas..." value="{{ $faculty->faculty }}">
                                    @error('faculty') 
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="major">Program Keahlian</label>
                                    <input type="text" class="form-control" id="major" name="major"
                                        placeholder="Masukan Program Keahlian..." value="{{ $faculty->major }}">
                                    @error('major')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/faculty" style="text-decoration: none;">
                                    <button type="button" class="btn btn-info">Kembali</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
