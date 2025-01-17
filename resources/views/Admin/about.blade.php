@extends('admin.layouts.app')

@section('title', 'About')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h4 class="mb-4">About</h4>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @if ($abouts->isEmpty())
                            <a href="{{ route('admin.about.create') }}" class="btn btn-primary btn-sm">Tambah</a>
                        @endif
                        <table class="table" id="about">
                            <thead>
                                <tr>
                                    <th scope="col" class="ps-0">No</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $about)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ Str::limit($about->deskripsi, 50, '...') }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $about->foto) }}" alt="" height="30">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="{{ route('admin.about.delete', $about->id) }}" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
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
        $('#about').DataTable();
    });
</script>

@endsection
