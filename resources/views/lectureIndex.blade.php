@extends('layouts.master')
@section('judul', 'Lecture Index')
@section('content')
    <a href="/lecture/create" class="btn btn-primary btn-sm">Tambah Dosen</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. HP</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datas as $keys => $item)
                <tr>
                    <th scope="row">{{ $keys + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->kodenip }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone_number }}</td>
                    <td>
                        <form action="/api/lecture/{{ $item->id }}/del">
                            @csrf
                            <a href="/lecture/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Lah kok Kosong :(</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
