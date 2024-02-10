@extends('layouts.master')
@section('judul','NIP Index')
@section('content')
  <a href="/lecture/create" class="btn btn-primary btn-sm">Tambah Dosen</a>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kode NIP</th>
          <th scope="col">Nama Dosen</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @forelse ($datas as $keys => $item)
            <tr>
              <th scope="row">{{ $keys+1 }}</th>
              <td>{{ $item->nip }}</td>
              <td>{{ $item->name }}</td>
              <td>
                <a href="/lecture/{{ $item->id }}" class="btn btn-success btn-sm">Detail</a>
                {{-- <form action="/api/lecture/{{ $item->id }}/del">
                  @csrf
                  <a href="/lecture/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form> --}}
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
