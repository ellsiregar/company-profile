@extends('admin.layouts.app')

@section('title', 'Servis')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h4 class="mb-4">Servis</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                    <a href="{{route('admin.servis.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                    <div class="table-responsive">
                    <table class="table text-nowrap align-middle mb-0" id="servis">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">Fasilitas</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($servis as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->fasilitas }}</td>
                                        <td>{{ Str::limit($item->deskripsi, 50, '...') }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="" height="30">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.servis.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('admin.servis.delete', $item->id) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
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
