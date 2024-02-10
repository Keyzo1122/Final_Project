@extends('layouts.master')

@section('judul', 'Mata Kuliah')
@section('content')
    <a href="/lesson/create" class="btn btn-primary my-2">Tambah Mata Kuliah Baru</a><br><br>
    <table id="fDataTable" class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lesson as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->lesson }}</td>
                    <td>{{ $value->sks }}</td>

                    <td>
                        <a href="/lesson/{{ $value->id }}" class="btn btn-info btn-sm" style="display: inline;">Show</a>
                        @auth
                            <a href="/lesson/{{ $value->id }}/edit" class="btn btn-warning btn-sm"
                                style="display: inline;">Edit</a>
                            <form action="/lesson/{{ $value->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
                            </form>
                        @endauth
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
