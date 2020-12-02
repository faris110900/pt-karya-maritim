@extends('admin.master')

@section('content')

<div class="container"></div>
<form action="{{ route('frontend.setting.update') }}" method="post" enctype="multipart/form-data">

    <h2>Setting Profile</h2>

    <div class="form-group">
      <label for="">Foto Slide Pertama</label>
      <input type="file" class="form-control-file" name="slide1">
    </div>

    <div class="form-group">
        <label for="">Foto Slide Kedua</label>
        <input type="file" class="form-control-file" name="slide2">
      </div>

      <div class="form-group">
        <label for="">Foto Slide Ketiga</label>
        <input type="file" class="form-control-file" name="slide2">
      </div>

    <div class="form-group">

    </div>
  </form>
</div>
    
@endsection