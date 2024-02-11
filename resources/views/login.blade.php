@extends('layouts.masterLogin')

@section('judul', 'Login')
@section('content')
    <article class="margin:200px">
        <h2 class="text-center" style="margin: 25px">
            <b>Home</b>
        </h2>
    </article>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    <form action={{ url("/api/postLogin") }} method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="usersLogin" class="form-label">ID</label>
                            <input type="text" name="usersLogin" class="form-control" id="usersLogin" placeholder="gunakan 'admin@admin.com'" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="gunakan 'admin'" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


    