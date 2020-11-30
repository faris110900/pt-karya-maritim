@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Tentang Perusahaan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('about') }}">about</a></li>
                    <li class="breadcrumb-item active">Edit About</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container">
        <form action="{{ route('frontend.about.update', $about) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
                <textarea name="content">
                    {{ $about->content }}
                </textarea>
            </div>

            <div class="mb-3" align="right">
                <button class="btn btn-primary" value="save" type="submit">Edit</button>
            </div>
        </form>
    </div>

@endsection

@push('footer-scripts')
    <script>
        CKEDITOR.replace('content');

    </script>
@endpush
