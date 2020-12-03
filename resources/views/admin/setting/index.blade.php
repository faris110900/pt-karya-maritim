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
                            <img src="{{ asset('storage/' . $setting[0]->slide1) }}"
                            width="300px" class="img-fluid" alt="">
                            
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Pertama</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('storage/' . $setting[0]->slide2) }}"
                            width="300px" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Kedua</h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('storage/' . $setting[0]->slide3) }}"
                            width="300px" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <h2>Foto Slide Ketiga</h2>
                        </div>
                    </div>
                    <hr>
                    <p>
                        {{-- @foreach ($setting as $stg) --}}
                            <strong> Title : </strong> {{ $setting[0]->title }}<br>
                            <strong> Caption Slide : </strong> {{ $setting[0]->caption }}<br>
                            <strong> Section 1 about us : </strong> {{ $setting[0]->section1 }}<br>
                            <strong> Section 2 about us : </strong>{{ $setting[0]->section2 }}<br>
                            <strong> Title Navbar : </strong>{{ $setting[0]->titlenav }}
                        </p>
                        <div class="btn-edit" align="right">
                            <a href="{{ route('frontend.setting.edit', $setting[0]->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                        {{-- @endforeach --}}
                    </div>
            </div>
        </div>

    </section>

@endsection
