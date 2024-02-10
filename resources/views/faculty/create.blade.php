@extends('layouts.master')

@section('judul', 'Fakultas')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambah Data Fakultas</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="/faculty" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="faculty">Fakultas</label>
                                    <input type="text" class="form-control" name="faculty" id="faculty" placeholder="Masukan Data Fakultas...">
                                    @error('faculty')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="major">Program Keahlian</label>
                                    <input type="text" class="form-control" name="major" id="major" placeholder="Masukan Program Keahlian...">
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
