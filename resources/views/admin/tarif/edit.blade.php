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
    <form action="{{ route('frontend.tarif.update', $tarif) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="">Nama Tarif</label>
            <input type="text" name="name" class="form-control" value="{{ $tarif->name }}">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                </div>
                <input type="text" class="form-control" name="price" id="harga" value="{{ $tarif->price }}"
            </div>
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="description" class="form-control" cols="10" rows="6">
                {{ $tarif->description }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="">Icon Tarif</label>
            <input type="file" class="form-control-file" id="" name="icon">
          </div>

        <div class="mb-3" align="right">
            <button class="btn btn-primary" value="save" type="submit">Edit</button>
        </div>
    </form>
</div>
    
@endsection

@push('scripts')
<script src="ht
tps://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>   
<script>
    $('#harga').mask('000.000.000.000', {reverse: true});
</script>
@endpush