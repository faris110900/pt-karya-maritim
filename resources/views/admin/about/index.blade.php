@extends('admin.master')

@section('content')

    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tentang Perusahaan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container">
        <div class="card">
            <div class="card-body">
                @foreach ($about as $abt)
                    {!! $abt->content !!}

                    <div class="group mt-3" align="right">
                        <a href="{{ route('frontend.about.edit', $abt) }}" class="btn btn-primary">Edit</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
