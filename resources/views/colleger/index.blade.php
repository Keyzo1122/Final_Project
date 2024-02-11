@extends('layouts.master')

@section('judul')
Mahasiswa
@section('content')
    <a href="/colleger/create" class="btn btn-primary  my-2">Tambah Data</a><br><br>
    <table id="fDataTable" class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama Mahasiswa</th> 
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($colleger as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nim }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->address }}</td>
                    <td>
                        <a href="/colleger/{{ $value->id }}" class="btn btn-info btn-sm" style="display: inline;">Show</a>
                            <a href="/colleger/{{ $value->id }}/edit" class="btn btn-warning btn-sm"
                                style="display: inline;">Edit</a>
                            <form action="/colleger/{{ $value->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
                            </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>Tidak Ada Data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
