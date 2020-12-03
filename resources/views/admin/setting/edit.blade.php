@extends('admin.master')

@section('content')

    <div class="container">
        <form action="{{ route('frontend.setting.update', $setting) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

            <h2>Setting Profile</h2>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Foto Slide Pertama</label>
                        <input type="file" class="form-control-file" name="slide1">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Foto Slide Kedua</label>
                        <input type="file" class="form-control-file" name="slide2">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="">Foto Slide Ketiga</label>
                        <input type="file" class="form-control-file" name="slide3">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="">Caption Slide</label>
                <textarea class="form-control" id="" rows="3" name="caption">
                  {{ $setting->caption }}
                </textarea>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Title Website</label>
                    <input type="text" class="form-control" id="" name="title" value="{{ $setting->title }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Title Navbar</label>
                    <input type="text" class="form-control" id="" name="titlenav" value="{{ $setting->titlenav }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Section 1 About Us</label>
                        <textarea class="form-control" id="" rows="3" name="section1">
                          {{ $setting->section1 }}
                        </textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Section 2 About Us</label>
                        <textarea class="form-control" id="" rows="3" name="section2">
                          {{ $setting->section2 }}
                        </textarea>
                    </div>
                </div>
            </div>


            <div class="mb-3" align="right">
                <button class="btn btn-primary" value="save" type="submit">Edit</button>
            </div>
        </form>
    </div>

@endsection
