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
                            @foreach ($setting as $stg)
                            <img src="{{ asset('storage/' . $stg->slide1) }}"
                            width="300px" class="img-fluid" alt="">
                            @endforeach
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Pertama</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach ($setting as $stg)
                            <img src="{{ asset('storage/' . $stg->slide2) }}"
                            width="300px" class="img-fluid" alt="">
                            @endforeach
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Kedua</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach ($setting as $stg)
                            <img src="{{ asset('storage/' . $stg->slide3) }}"
                            width="300px" class="img-fluid" alt="">
                            @endforeach
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
                            <strong> Section 2 about us : </strong>{{ $stg->section2 }}<br>
                            <strong> Title Navbar : </strong>{{ $stg->titlenav }}
                        </p>
                        <div class="btn-edit" align="right">
                            <a href="{{ route('frontend.setting.edit', $stg) }}" class="btn btn-primary">Edit</a>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>

    </section>

@endsection
