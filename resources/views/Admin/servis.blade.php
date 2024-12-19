@extends('admin.layouts.app')

@section('title', 'Servis')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h4 class="mb-4">servis</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('admin.servis.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        <table class="table" id="servis">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">fasilitas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $servis as $servis )
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $servis->fasilitas}}</td>
                                    <td>
                                        <a href="{{ route('admin.kategori.edit', $servis->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('admin.servis.delete', $servis->id) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
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
        $('#servis').DataTable();
    });
</script>

@endsection
