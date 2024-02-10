@extends('layouts.master')

@section('judul', 'Nilai')
@section('content')
    <a href="/grade/create" class="btn btn-primary  my-2">Tambah Data</a><br><br>
    <table id="fDataTable" class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai</th>
                <th scope="col">Semester</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($grade as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->grade }}</td>
                    <td>{{ $value->major }}</td>
                    <td>
                        <a href="/grade/{{ $value->id }}" class="btn btn-info btn-sm" style="display: inline;">Show</a>
                            <a href="/grade/{{ $value->id }}/edit" class="btn btn-warning btn-sm"
                                style="display: inline;">Edit</a>
                            <form action="/grade/{{ $value->id }}" method="POST" style="display: inline;">
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
