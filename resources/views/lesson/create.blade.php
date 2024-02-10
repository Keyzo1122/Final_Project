@extends('layouts.master')

@section('judul', 'Mata Kuliah')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambah Mata Kuliah</h5>
                    <div class="card">
                        <div class="card-body">
                            <form action="/lesson" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="lesson">Nama Mata Kuliah</label>
                                    <input type="lesson" class="form-control" id="lesson" placeholder="Masukan Nama Mata Kuliah...">
                                    @error('lesson')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="sks">Jumlah SKS</label>
                                    <input type="sks" class="form-control" id="sks" placeholder="Masukan Jumlah SKS...">
                                    @error('sks')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="lecturer_id">Nama Dosen</label>
                                    <select name="lecturer_id" id="" class="form-control">
                                        <option value="">--Silahkan Pilih Dosen--</option>
                                        @forelse ($lecturer as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                            <option value="">Tidak Ada Dosen</option>
                                        @endforelse
                                    </select>
                                    @error('lecturer_id')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="faculty_id">Nama Fakultas</label>
                                    <select name="faculty_id" id="" class="form-control">
                                        <option value="">--Silahkan Pilih Dosen--</option>
                                        @forelse ($faculty as $item)
                                            <option value="{{ $item->id }}">{{ $item->faculty }}</option>
                                        @empty
                                            <option value="">Tidak Ada Dosen</option>
                                        @endforelse
                                    </select>
                                    @error('faculty_id')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/lesson" style="text-decoration: none;">
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
