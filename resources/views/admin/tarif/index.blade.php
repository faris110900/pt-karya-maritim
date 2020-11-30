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
        <a href="{{ route('frontend.tarif.create') }}" class="btn btn-primary">Tambah Tarif</a>
        </div>
        <div class="table-responsive">
            <table id="table-tarif" class="table">
                <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Nama</th>
                        <th>Tarif</th>
                        <th>Deskripsi</th>
                        <th>Created_at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tarif as $trf)
                    <tr>
                            <td> <img src="{{ asset('storage/' . $trf->icon) }}" width="50px" class="img-fluid" alt="" srcset=""></td>
                            <td>{{ $trf->name }}</td>
                            <td>Rp.{{ $trf->price }}</td>
                            <td>{{ $trf->description }}</td>
                            <td>{{ $trf->created_at->diffForHumans() }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v" style="color: #000;"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item"
                                            href="{{ route('frontend.tarif.edit', $trf) }}">Edit</a>
                                        <a class="dropdown-item"
                                            href="{{ route('frontend.tarif.delete', $trf->id) }}">Delete</a>
                                        {{-- <a class="dropdown-item"
                                            href="{{ route('frontend.tarif.show', $trf) }}">Show</a> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Icon</th>
                        <th>Nama</th>
                        <th>Tarif</th>
                        <th>Deskripsi</th>
                        <th>Created_at</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#table-tarif').DataTable();
        });

    </script>
@endpush