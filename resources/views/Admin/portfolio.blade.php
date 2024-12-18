@extends('Admin.layouts.app')

@section('title', 'Portfolio')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lisfera Cofffe</h5>
                <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0" id="portfolio">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Nama Portfolio</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Foto</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$portfolio->kategori->nama_kategori}}</td>
                                <td>{{$portfolio->nama_portfolio}}</td>
                                <td>{{$portfolio->deskripsi}}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $portfolio->foto) }}" alt="" height="30">
                                </td>
                                <td class="text-center">
                                    <a href="{{route('admin.portfolio.edit', $portfolio->id_portfolio)}}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{route('admin.portfolio.delete', $portfolio->id_portfolio)}}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#portfolio').DataTable();
    });
</script>

@endsection
