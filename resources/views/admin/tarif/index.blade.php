@extends('admin.master')

@section('content')

    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tarif</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tarif</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="conteiner-fluid">
        <div class="tarif-btn mt-3 mb-3" align="right">
        <a href="{{ route('') }}" class="btn btn-primary">Tambah Tarif</a>
        </div>
        <div class="table-responsive">
            <table id="storyTable" class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tarif</th>
                        <th>Deskripsi</th>
                        <th>Created_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                    <tr>
                        <td></td>
                    </tr>
                <tbody>
                </tbody>
            </table>
    </div>

@endsection
