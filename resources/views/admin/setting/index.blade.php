@extends('admin.master')

@section('content')

    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Setting</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <section id="setting" class="setting">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://images.unsplash.com/photo-1490730141103-6cac27aaab94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                width="300px" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Pertama</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://images.unsplash.com/photo-1490730141103-6cac27aaab94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                width="300px" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Kedua</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://images.unsplash.com/photo-1490730141103-6cac27aaab94?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                                width="300px" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Ketiga</h2>
                        </div>
                    </div>
                    <hr>
                    <p>
                        @foreach ($setting as $stg)
                            <strong> Title : </strong> {{ $stg->title }}<br>
                            <strong> Caption Slide : </strong> {{ $stg->caption }}<br>
                            <strong> Section 1 about us : </strong> {{ $stg->section1 }}<br>
                            <strong> Section 2 about us : </strong><br>
                            <strong> Title Navbar : </strong>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>

    </section>

@endsection
