@extends('admin.layouts.app')

@section('title', 'Edit Servis')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Edit Servis</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.servis.update', $servis->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- No Telepon Input -->
                            <div class="mb-3">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" class="form-control" id="fasilitas" name="fasilitas"
                                    value="{{ old('fasilitas', $servis->fasilitas) }}" required>
                                <div class="text-danger">
                                    @error('fasilitas')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                           <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi', $servis->deskripsi) }}</textarea>
                                <div class="text-danger">
                                    @error('deskripsi')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <div class="text-danger">
                                    @error('foto')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $servis->foto) }}" alt="Foto Servis" height="100">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
