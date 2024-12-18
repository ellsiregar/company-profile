@extends('admin.layouts.app')

@section('title', 'Kategori')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h4 class="mb-4">Kategori</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        <table class="table" id="kategori">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoris as $kategori )
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $ketegori->nama_kategori}}</td>
                                    <td>
                                        <a href="{{ route('admin.ketegori.edit', $ketegori->id_ketegori) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.ketegori.delete', $ketegori->id_ketegori) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#ketegori').DataTable();
    });
</script>

@endsection
