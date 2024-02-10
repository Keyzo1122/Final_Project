@extends('layouts.master')

@section('judul', 'Fakultas')
@section('content')
    <a href="/faculty/create" class="btn btn-primary  my-2">Tambah Data</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Grade</th>
                <th scope="col">Semester</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($faculty as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->faculty }}</td>
                    <td>{{ $value->major }}</td>
                    <td>
                        <a href="/faculty/{{ $value->id }}" class="btn btn-info btn-sm" style="display: inline;">Show</a>
                            <a href="/faculty/{{ $value->id }}/edit" class="btn btn-warning btn-sm"
                                style="display: inline;">Edit</a>
                            <form action="/faculty/{{ $value->id }}" method="POST" style="display: inline;">
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
