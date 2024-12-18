@extends('admin.layouts.app')

@section('title', 'Edit kategori')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Edit Contact</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.kategori.update', $kategori->id_kategori) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- No Telepon Input -->
                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">No Telepon</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                                    value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
                                <div class="text-danger">
                                    @error('nama_kategori')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
