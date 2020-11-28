@extends('admin.master')

@section('content')

    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kontak</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4>Informasi Kontak</h4>
                @foreach ($kontak as $kntk)
                <p class="mt-3 text-muted">
                        Alamat &nbsp;&nbsp;: &nbsp;{{ $kntk->address }}<br>
                        Phone 1 : &nbsp;{{ $kntk->phone1 }}<br>
                        Phone 2 : &nbsp;{{ $kntk->phone2 }}<br>
                        Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{ $kntk->email }}
                    </p>
                    
                    <div class="group" align="right">
                        <a href="{{ route('frontend.kontak.edit', $kntk) }}" class="btn btn-primary">Edit</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
