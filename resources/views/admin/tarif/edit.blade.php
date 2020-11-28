@extends('admin.master')

@section('content')

<div class="content-header">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Tarif</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('frontend.tarif.index') }}">Tarif</a></li>
                <li class="breadcrumb-item active">Edit Tarif</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="container-fluid">
    <form action="{{ route('frontend.tarif.update', $tarif) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="">Nama Tarif</label>
            <input type="text" name="name" class="form-control" value="{{ $tarif->name }}">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="price" class="form-control" value="{{ $tarif->price }}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" class="form-control" cols="10" rows="6">
                {{ $tarif->description }}
            </textarea>
        </div>

        <div class="mb-3" align="right">
            <button class="btn btn-primary" value="save" type="submit">Edit</button>
        </div>
    </form>
</div>
    
@endsection