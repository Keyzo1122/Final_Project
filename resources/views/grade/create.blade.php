@extends('layouts.master')

@section('judul', 'Nilai')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambah Data Nilai</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="/grade" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama...">
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="colleger_id">Nim</label>
                                    <select name="colleger_id" id="colleger_id" class="form-control">
                                        <option value="">--Silahkan Pilih Nim Anda--</option>
                                        @forelse ($colleger as $item)
                                            <option value="{{ $item->id }}">{{ $item->nim }}</option>
                                        @empty
                                            <option value="">Tidak Ada Dosen</option>
                                        @endforelse
                                    </select>
                                    @error('colleger_id')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="lesson_id">Matakuliah</label>
                                    <select name="lesson_id" id="lesson_id" class="form-control">
                                        <option value="">--Silahkan Pilih Mata Kuliah Anda--</option>
                                        @forelse ($lesson as $item)
                                            <option value="{{ $item->id }}">{{ $item->lesson }}</option>
                                        @empty
                                            <option value="">Tidak Ada Dosen</option>
                                        @endforelse
                                    </select>
                                    @error('lesson_id')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="grade">Nilai</label>
                                    <input type="text" class="form-control" name="grade" id="grade" placeholder="Masukan Data Nilai...">
                                    @error('grade')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="semester">Semester</label>
                                    <input type="text" class="form-control" name="semester" id="semester" placeholder="Masukan Semester...">
                                    @error('semester')
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
