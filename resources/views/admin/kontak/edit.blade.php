@extends('admin.master')

@section('content')

<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Kontak</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('frontend.kontak.index') }}">Tarif</a></li>
                <li class="breadcrumb-item active">Edit Kontak</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="container-fluid">
    <form action="{{ route('frontend.kontak.update', $kontak) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="address" class="form-control" value="{{ $kontak->address }}">
        </div>

        <div class="form-group">
            <label for="">Nomor Telepon 1</label>
            <input type="text" name="phone1" class="form-control" value="{{ $kontak->phone1 }}">
        </div>

        <div class="form-group">
            <label for="">Nomor Telepon 1</label>
            <input type="text" name="phone2" class="form-control" value="{{ $kontak->phone2 }}">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" value="{{ $kontak->email }}">
        </div>

        <div class="mb-3" align="right">
            <button class="btn btn-primary" value="save" type="submit">Edit</button>
        </div>
    </form>
</div>
    
@endsection